<?php

namespace WPForms\Helpers;

/**
 * DB helpers.
 *
 * @since 1.8.7
 */
class DB {

	/**
	 * Existing tables transient name.
	 *
	 * @since 1.8.7
	 *
	 * @var string
	 */
	const EXISTING_TABLES_TRANSIENT_NAME = 'wpforms_existing_tables';

	/**
	 * Existing tables transient expiration, sec.
	 *
	 * @since 1.8.7
	 *
	 * @var int
	 * @noinspection SummerTimeUnsafeTimeManipulationInspection
	 */
	const EXISTING_TABLES_TRANSIENT_EXPIRATION = WEEK_IN_SECONDS; // A week.

	/**
	 * Existing tables.
	 *
	 * @since 1.8.7
	 *
	 * @var array
	 */
	private static $existing_tables = [];

	/**
	 * Get the list of existing tables and cache the result.
	 *
	 * @since 1.8.7
	 *
	 * @param string $table_name Table name. Can have SQL wildcard.
	 *
	 * @return array List of table names.
	 */
	public static function get_existing_tables( string $table_name ): array {

		global $wpdb;

		/**
		 * Filters existence of a table before a request to the database is executed.
		 *
		 * @since 1.8.7
		 *
		 * @param array  $tables     Existing tables with given table name.
		 * @param string $table_name Table name.
		 */
		$tables = (array) apply_filters( 'wpforms_helpers_db_pre_get_existing_tables', [], $table_name );

		if ( $tables ) {
			return $tables;
		}

		$tables = self::get_existing_tables_cache( $table_name );

		if ( $tables ) {
			return $tables;
		}

		// phpcs:disable WordPress.DB.DirectDatabaseQuery.NoCaching
		$tables = $wpdb->get_results(
			$wpdb->prepare( 'SHOW TABLES LIKE %s', $table_name ),
			'ARRAY_N'
		);
		// phpcs:enable WordPress.DB.DirectDatabaseQuery.NoCaching

		$tables = ! empty( $tables ) ? wp_list_pluck( $tables, 0 ) : [];

		self::set_existing_tables_cache( $tables, $table_name );

		return self::$existing_tables[ $table_name ] ?? [];
	}

	/**
	 * Get the list of all existing custom tables starting with `wpforms_*` and cache the result.
	 *
	 * @since 1.8.7
	 *
	 * @return array List of table names.
	 */
	public static function get_existing_custom_tables(): array {

		global $wpdb;

		return self::get_existing_tables( "{$wpdb->prefix}wpforms_%" );
	}

	/**
	 * Check if the database table exists and cache the result.
	 *
	 * @since 1.8.7
	 *
	 * @param string $table_name Table name. Can have SQL wildcard.
	 *
	 * @return bool
	 */
	public static function table_exists( string $table_name ): bool {

		/**
		 * Filters existence of a table before a request to the database is executed.
		 *
		 * @since 1.8.7
		 *
		 * @param integer $exists     Table exists.
		 * @param string  $table_name Table name.
		 */
		if ( apply_filters( 'wpforms_helpers_db_pre_table_exists', false, $table_name ) ) {
			return true;
		}

		foreach ( self::get_existing_tables( $table_name ) as $existing_table ) {
			if ( self::wildcard_match( $table_name, $existing_table ) ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Get the list of existing tables from cache.
	 *
	 * @since 1.8.7
	 *
	 * @param string $table_name Table name. Can have SQL wildcard.
	 *
	 * @return array List of table names.
	 */
	private static function get_existing_tables_cache( string $table_name ): array {

		$tables                = Transient::get( self::EXISTING_TABLES_TRANSIENT_NAME );
		self::$existing_tables = $tables ? $tables : [];

		return self::$existing_tables[ $table_name ] ?? [];
	}

	/**
	 * Set existing tables cache.
	 *
	 * @since 1.8.7
	 *
	 * @param array  $tables     Existing tables with given table name.
	 * @param string $table_name Table name.
	 *
	 * @return void
	 */
	private static function set_existing_tables_cache( array $tables, string $table_name ) {

		if ( empty( $tables ) ) {
			return;
		}

		self::$existing_tables[ $table_name ] = $tables;

		/**
		 * Filters existing tables transient expiration time.
		 *
		 * @since 1.8.7
		 *
		 * @param integer $expiration Expiration time.
		 */
		$expiration = apply_filters( 'wpforms_helpers_db_existing_tables_transient_expiration', self::EXISTING_TABLES_TRANSIENT_EXPIRATION );

		Transient::set( self::EXISTING_TABLES_TRANSIENT_NAME, self::$existing_tables, $expiration );
	}

	/**
	 * Wildcard match.
	 * Works as MySQL LIKE match.
	 *
	 * @since 1.8.7
	 *
	 * @param string $pattern Pattern.
	 * @param string $subject String to search into.
	 *
	 * @return false|int
	 */
	private static function wildcard_match( string $pattern, string $subject ) {

		$regex = str_replace(
			[ '%', '_' ], // MySQL wildcard chars.
			[ '.*', '.' ],  // Regexp chars.
			preg_quote( $pattern, '/' )
		);

		return preg_match( '/^' . $regex . '$/is', $subject );
	}
}
