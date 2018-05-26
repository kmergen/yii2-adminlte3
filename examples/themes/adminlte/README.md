# Yii 2 Adminlte3 example

### Build the theme

We explain what is to do if you use npm instead of normal yii2 assets.

In the example theme we use the [Yii 2.0 Advanced Application Template](https://github.com/yiisoft/yii2-app-advanced), 
[Yii2 User Module](https://github.com/dektrium/yii2-user) and [Yii2 RBAC Module](https://github.com/dektrium/yii2-rbac).

1. You have to install [Node.js](https://nodejs.org) on your development server to use the ``npm`` package manager.
(On your production server there is no need to install Node.js), because you can build all files on your development server.)
2. Copy ``themes`` folder from ``vendor/kmergen/yii2-coreui-gulp/examples/themes`` to your application ``backend`` directory.
3. Run from console the following commands (ensure that you are in the directory where your ``package.json`` is in normally ``backend/themes/adminlte``):
- ``npm install`` that can take a few minutes
- ``npm run build``

4. In component section of your config file, map your view files to your theme directory for e.g.

```php
'view' => [
            'theme' => [
                'basePath' => '@backend/themes/coreui',
                'pathMap' => [
                    '@app/views' => '@backend/themes/adminlte/views',
                    '@dektrium/user/views' => '@backend/themes/adminlte/views/user',
                    '@dektrium/rbac/views' => '@backend/themes/adminlte/views/rbac',
                ],
            ],
        ],
```
Now you are ready to go and you should see the login page if you request your backend Url.


### Watch your scss and view file changes and refresh your browser automatically

Run the following command:
- ``npm run serve`` that starts the server on localhost:3000




