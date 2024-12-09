<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit845924cc7fa1a3be3ae44b90bf25cb64
{
    public static $files = array (
        '5897ea0ac4cccf14d323035e65887801' => __DIR__ . '/..' . '/symfony/polyfill-php82/bootstrap.php',
        '8e92226780215d0ec758aa7b73e0ede9' => __DIR__ . '/..' . '/open-telemetry/context/fiber/initialize_fiber_handler.php',
        'c7b4a5d8b94d270f0f9a84f81e1dd63d' => __DIR__ . '/..' . '/open-telemetry/api/Trace/functions.php',
        'e39a8b23c42d4e1452234d762b03835a' => __DIR__ . '/..' . '/ramsey/uuid/src/functions.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'c695cb998ba36e4bafc3d028efc7d113' => __DIR__ . '/..' . '/open-telemetry/sdk/Common/Util/functions.php',
        'd991bdbfe253499825156f17c4a721db' => __DIR__ . '/..' . '/open-telemetry/sdk/Logs/Exporter/_register.php',
        '01d424d2624f29a2eef00b09eb00935e' => __DIR__ . '/..' . '/open-telemetry/sdk/Metrics/MetricExporter/_register.php',
        '063d0a0034c5e2149209c15208de47e4' => __DIR__ . '/..' . '/open-telemetry/sdk/Propagation/_register.php',
        '2cc49ecec7e065b3a5423e964c0275e6' => __DIR__ . '/..' . '/open-telemetry/sdk/Trace/SpanExporter/_register.php',
        '062120a429d7568eacd495a8c34fcf09' => __DIR__ . '/..' . '/open-telemetry/sdk/Common/Dev/Compatibility/_load.php',
        '88e3b63cfb48eb8ea316a8a85a5f5c5f' => __DIR__ . '/..' . '/open-telemetry/sdk/_autoload.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '07d7f1a47144818725fd8d91a907ac57' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/create_uploaded_file.php',
        'da94ac5d3ca7d2dbab84ce561ce72bfd' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/marshal_headers_from_sapi.php',
        '3d97c8dcdfba8cb85d3b34f116bb248b' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/marshal_method_from_sapi.php',
        'e6f3bc6883e449ab367280b34158c05b' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/marshal_protocol_version_from_sapi.php',
        'de95e0ac670b27c84ef8c5ac41fc1b34' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/normalize_server.php',
        'b6c2870932b0250c10334a86dcb33c7f' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/normalize_uploaded_files.php',
        'd02cf21124526632320d6f20b1bbf905' => __DIR__ . '/..' . '/laminas/laminas-diactoros/src/functions/parse_cookie_header.php',
        '157bbd0180425c7142fbaf1b1646bec3' => __DIR__ . '/..' . '/open-telemetry/exporter-otlp/_register.php',
        '58ecdc6bc6b585138831611aa769a744' => __DIR__ . '/..' . '/open-telemetry/opentelemetry-auto-psr18/_register.php',
        'dfdb213a5229dd55e621055ca8fd74e1' => __DIR__ . '/..' . '/open-telemetry/opentelemetry-auto-slim/_register.php',
        '88ba729344893fbac0923a8952a95d11' => __DIR__ . '/..' . '/open-telemetry/transport-grpc/_register.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php82\\' => 23,
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Slim\\Psr7\\' => 10,
            'Slim\\' => 5,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
            'Ramsey\\Collection\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\Container\\' => 14,
        ),
        'O' => 
        array (
            'Opentelemetry\\Proto\\' => 20,
            'OpenTelemetry\\SemConv\\' => 22,
            'OpenTelemetry\\SDK\\' => 18,
            'OpenTelemetry\\Contrib\\Otlp\\' => 27,
            'OpenTelemetry\\Contrib\\Instrumentation\\Slim\\' => 43,
            'OpenTelemetry\\Contrib\\Instrumentation\\Psr18\\' => 44,
            'OpenTelemetry\\Contrib\\Grpc\\' => 27,
            'OpenTelemetry\\Context\\' => 22,
            'OpenTelemetry\\API\\' => 18,
        ),
        'N' => 
        array (
            'Nyholm\\Psr7\\' => 12,
            'Nyholm\\Psr7Server\\' => 18,
            'Nevay\\SPI\\' => 10,
        ),
        'L' => 
        array (
            'Laminas\\Diactoros\\' => 18,
        ),
        'H' => 
        array (
            'Http\\Discovery\\' => 15,
        ),
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Opentelemetry\\' => 26,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
        ),
        'F' => 
        array (
            'Fig\\Http\\Message\\' => 17,
            'FastRoute\\' => 10,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php82\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php82',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Slim\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/psr7/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Ramsey\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/collection/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Opentelemetry\\Proto\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/gen-otlp-protobuf/Opentelemetry/Proto',
        ),
        'OpenTelemetry\\SemConv\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/sem-conv',
        ),
        'OpenTelemetry\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/sdk',
        ),
        'OpenTelemetry\\Contrib\\Otlp\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/exporter-otlp',
        ),
        'OpenTelemetry\\Contrib\\Instrumentation\\Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/opentelemetry-auto-slim/src',
        ),
        'OpenTelemetry\\Contrib\\Instrumentation\\Psr18\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/opentelemetry-auto-psr18/src',
        ),
        'OpenTelemetry\\Contrib\\Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/transport-grpc',
        ),
        'OpenTelemetry\\Context\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/context',
        ),
        'OpenTelemetry\\API\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/api',
        ),
        'Nyholm\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7/src',
        ),
        'Nyholm\\Psr7Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7-server/src',
        ),
        'Nevay\\SPI\\' => 
        array (
            0 => __DIR__ . '/..' . '/tbachert/spi/src',
        ),
        'Laminas\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-diactoros/src',
        ),
        'Http\\Discovery\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/discovery/src',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Opentelemetry\\' => 
        array (
            0 => __DIR__ . '/..' . '/open-telemetry/gen-otlp-protobuf/GPBMetadata/Opentelemetry',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
    );

    public static $classMap = array (
        'AllowDynamicProperties' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/AllowDynamicProperties.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Random\\BrokenRandomEngineError' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/Random/BrokenRandomEngineError.php',
        'Random\\CryptoSafeEngine' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/Random/CryptoSafeEngine.php',
        'Random\\Engine' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/Random/Engine.php',
        'Random\\Engine\\Secure' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/Random/Engine/Secure.php',
        'Random\\RandomError' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/Random/RandomError.php',
        'Random\\RandomException' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/Random/RandomException.php',
        'SensitiveParameter' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/SensitiveParameter.php',
        'SensitiveParameterValue' => __DIR__ . '/..' . '/symfony/polyfill-php82/Resources/stubs/SensitiveParameterValue.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit845924cc7fa1a3be3ae44b90bf25cb64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit845924cc7fa1a3be3ae44b90bf25cb64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit845924cc7fa1a3be3ae44b90bf25cb64::$classMap;

        }, null, ClassLoader::class);
    }
}
