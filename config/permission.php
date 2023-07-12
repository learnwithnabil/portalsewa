<?php

return [

    'authorities' => [
        'manage_certificate' => [
            'certificate_show',
            'certificate_create',
            'certificate_update',
            'certificate_detail',
            'certificate_delete'
        ],
        'manage_customers' => [
            'customer_show',
            'customer_create',
            'customer_update',
            'customer_detail',
            'customer_delete'
        ],
        'manage_agencies' => [
            'agency_show',
            'agency_create',
            'agency_update',
            'agency_detail',
            'agency_delete'
        ],
        'manage_products' => [
            'product_show',
            'product_create',
            'product_update',
            'product_detail',
            'product_delete'
        ],
        'manage_brands' => [
            'brand_show',
            'brand_create',
            'brand_update',
            'brand_detail',
            'brand_delete'
        ],
        'manage_tags' => [
            'tag_show',
            'tag_create',
            'tag_update',
            'tag_detail',
            'tag_delete'
        ],
        'manage_rents' => [
            'rent_show',
            'rent_create',
            'rent_update',
            'rent_delete'
        ],
        'manage_orders' => [
            'order_show',
            'order_create',
            'order_update',
            'order_delete'
        ],
        'manage_bookings' => [
            'booking_show',
            'booking_create',
            'booking_update',
            'booking_delete'
        ],
        'manage_rent_histories' => [
            'rent_history_show',
            'rent_history_create',
            'rent_history_update',
            'rent_history_delete'
        ],
        'manage_roles' => [
            'role_show',
            'role_create',
            'role_update',
            'role_detail',
            'role_delete'
        ],
        'manage_users' => [
            'user_show',
            'user_create',
            'user_update',
            'user_detail',
            'user_delete'
        ],
        'manage_filemanager' => [
            'filemanager_show',
        ],
        'manage_menu' => [
            'access_show',
        ],
    ],

    'models' => [

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your permissions. Of course, it
         * is often just the "Permission" model but you may use whatever you like.
         *
         * The model you want to use as a Permission model needs to implement the
         * `Spatie\Permission\Contracts\Permission` contract.
         */

        'permission' => Spatie\Permission\Models\Permission::class,

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * Eloquent model should be used to retrieve your roles. Of course, it
         * is often just the "Role" model but you may use whatever you like.
         *
         * The model you want to use as a Role model needs to implement the
         * `Spatie\Permission\Contracts\Role` contract.
         */

        'role' => Spatie\Permission\Models\Role::class,

    ],

    'table_names' => [

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'roles' => 'roles',

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * table should be used to retrieve your permissions. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'permissions' => 'permissions',

        /*
         * When using the "HasPermissions" trait from this package, we need to know which
         * table should be used to retrieve your models permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_permissions' => 'model_has_permissions',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your models roles. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'model_has_roles' => 'model_has_roles',

        /*
         * When using the "HasRoles" trait from this package, we need to know which
         * table should be used to retrieve your roles permissions. We have chosen a
         * basic default value but you may easily change it to any table you like.
         */

        'role_has_permissions' => 'role_has_permissions',
    ],

    'column_names' => [
        /*
         * Change this if you want to name the related pivots other than defaults
         */
        'role_pivot_key' => null, //default 'role_id',
        'permission_pivot_key' => null, //default 'permission_id',

        /*
         * Change this if you want to name the related model primary key other than
         * `model_id`.
         *
         * For example, this would be nice if your primary keys are all UUIDs. In
         * that case, name this `model_uuid`.
         */

        'model_morph_key' => 'model_id',

        /*
         * Change this if you want to use the teams feature and your related model's
         * foreign key is other than `team_id`.
         */

        'team_foreign_key' => 'team_id',
    ],

    /*
     * When set to true, the method for checking permissions will be registered on the gate.
     * Set this to false, if you want to implement custom logic for checking permissions.
     */

    'register_permission_check_method' => true,

    /*
     * When set to true the package implements teams using the 'team_foreign_key'. If you want
     * the migrations to register the 'team_foreign_key', you must set this to true
     * before doing the migration. If you already did the migration then you must make a new
     * migration to also add 'team_foreign_key' to 'roles', 'model_has_roles', and
     * 'model_has_permissions'(view the latest version of package's migration file)
     */

    'teams' => false,

    /*
     * When set to true, the required permission names are added to the exception
     * message. This could be considered an information leak in some contexts, so
     * the default setting is false here for optimum safety.
     */

    'display_permission_in_exception' => false,

    /*
     * When set to true, the required role names are added to the exception
     * message. This could be considered an information leak in some contexts, so
     * the default setting is false here for optimum safety.
     */

    'display_role_in_exception' => false,

    /*
     * By default wildcard permission lookups are disabled.
     */

    'enable_wildcard_permission' => false,

    'cache' => [

        /*
         * By default all permissions are cached for 24 hours to speed up performance.
         * When permissions or roles are updated the cache is flushed automatically.
         */

        'expiration_time' => \DateInterval::createFromDateString('24 hours'),

        /*
         * The cache key used to store all permissions.
         */

        'key' => 'spatie.permission.cache',

        /*
         * You may optionally indicate a specific cache driver to use for permission and
         * role caching using any of the `store` drivers listed in the cache.php config
         * file. Using 'default' here means to use the `default` set in cache.php.
         */

        'store' => 'default',
    ],
];
