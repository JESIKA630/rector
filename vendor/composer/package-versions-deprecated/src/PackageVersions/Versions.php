<?php

declare (strict_types=1);
namespace RectorPrefix20210511\PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;
\class_exists(\Composer\InstalledVersions::class);
/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'rector/rector-src';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS = array('composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6', 'composer/semver' => '3.2.4@a02fdf930a3c1c3ed3a49b5f63859c0c20e10464', 'composer/xdebug-handler' => '2.0.1@964adcdd3a28bf9ed5d9ac6450064e0d71ed7496', 'danielstjules/stringy' => '3.1.0@df24ab62d2d8213bbbe88cc36fc35a4503b4bd7e', 'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210', 'ergebnis/json-printer' => '3.1.1@e4190dadd9937a77d8afcaf2b6c42a528ab367d6', 'idiosyncratic/editorconfig' => '0.1.1@50f742daee8b7a632b795f5927d8d88c43dd3a4f', 'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303', 'nette/caching' => 'v3.1.1@3e771c589dee414724be473c24ad16dae50c1960', 'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50', 'nette/neon' => 'v3.2.2@e4ca6f4669121ca6876b1d048c612480e39a28d5', 'nette/utils' => 'v3.2.2@967cfc4f9a1acd5f1058d76715a424c53343c20c', 'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f', 'phpstan/phpdoc-parser' => '0.5.4@e352d065af1ae9b41c12d1dfd309e90f7b1f55c9', 'phpstan/phpstan' => '0.12.86@a84fdc53ecca7643dbc89ef8880d8b393a6c155a', 'phpstan/phpstan-phpunit' => '0.12.19@52f7072ddc5f81492f9d2de65a24813a48c90b18', 'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf', 'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0', 'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11', 'rector/extension-installer' => '0.10.2@56c97630fca170b5586b2f08e76348f924ebb8dd', 'rector/rector-cakephp' => '0.10.4@5155ac30d2cd04144690c118a030af0a4a1e68f4', 'rector/rector-doctrine' => '0.10.6@52dbdf1d60c522c1c40142a194960610db451f91', 'rector/rector-laravel' => '0.10.2@d4ccd50d7975bea9a0ce961bbaded385b5ede739', 'rector/rector-nette' => '0.10.10@e9f0de1ffb3ba1eecdaa281fcd64fda1d3515e6f', 'rector/rector-nette-to-symfony' => '0.10.0@27be9cb982ac7ad3799e0ac7fd45be0a46d7fb0b', 'rector/rector-phpunit' => '0.10.8@2b272b61cacf29bf0e448719165c8376cd41872e', 'rector/rector-symfony' => '0.10.6@583e77ad2fc8c7740418d55884beb3d18822e115', 'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d', 'shanethehat/pretty-xml' => '1.0.2@2b063c6544c8dc9563c53cb72eb06d1d74c9e75f', 'symfony/config' => 'v5.2.7@3817662ada105c8c4d1afdb4ec003003efd1d8d8', 'symfony/console' => 'v5.2.7@90374b8ed059325b49a29b55b3f8bb4062c87629', 'symfony/dependency-injection' => 'v5.2.7@6ca378b99e3c9ba6127eb43b68389fb2b7348577', 'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627', 'symfony/error-handler' => 'v5.2.7@ea3ddbf67615e883ca7c33a4de61213789846782', 'symfony/event-dispatcher' => 'v5.2.4@d08d6ec121a425897951900ab692b612a61d6240', 'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11', 'symfony/filesystem' => 'v5.2.7@056e92acc21d977c37e6ea8e97374b2a6c8551b0', 'symfony/finder' => 'v5.2.4@0d639a0943822626290d169965804f79400e6a04', 'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4', 'symfony/http-foundation' => 'v5.2.7@a416487a73bb9c9d120e9ba3a60547f4a3fb7a1f', 'symfony/http-kernel' => 'v5.2.7@1e9f6879f070f718e0055fbac232a56f67b8b6bd', 'symfony/polyfill-ctype' => 'v1.22.1@c6c942b1ac76c82448322025e084cadc56048b4e', 'symfony/polyfill-intl-grapheme' => 'v1.22.1@5601e09b69f26c1828b13b6bb87cb07cddba3170', 'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248', 'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1', 'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2', 'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91', 'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb', 'symfony/string' => 'v5.2.6@ad0bd91bce2054103f5eaa18ebeba8d3bc2a0572', 'symfony/var-dumper' => 'v5.2.7@27cb9f7cfa3853c736425c7233a8f68814b19636', 'symplify/astral' => 'v9.3.0@9707ba1a438bb0e22dca731ac16a47cb9944d1df', 'symplify/autowire-array-parameter' => 'v9.3.1@130fff4f734e752dee5d14da26038e9c213d1381', 'symplify/composer-json-manipulator' => 'v9.3.1@3669e146cb16d990cb33c1dcd321e462aeb63209', 'symplify/console-color-diff' => 'v9.3.1@4be4c9a5951bc4e06138099582143ce965f4e63c', 'symplify/console-package-builder' => 'v9.3.1@6b3c83944b8c094c5a4b80356316d2348a9056c7', 'symplify/easy-testing' => 'v9.3.1@0bde7c1c45d80a6ff9587a0b960984d9dc9b9700', 'symplify/package-builder' => 'v9.3.1@126c7b9e3c13fb44c581fced4c5355bd51466d55', 'symplify/rule-doc-generator-contracts' => 'v9.3.1@0f04552a1fad5beff718935086177ef2a4de5ca6', 'symplify/set-config-resolver' => 'v9.3.1@00a96e094b2c4e784b74797a07a2ca562d14a3b3', 'symplify/simple-php-doc-parser' => 'v9.3.1@c3e9dfc3a33dc2d16c3beff7fefa27a3b4cf421b', 'symplify/skipper' => 'v9.3.1@cd166ddf714cfdc120fb44bc1338865b2f59b889', 'symplify/smart-file-system' => 'v9.3.1@2721d9eb56b43726307d42a4b64f2cee5b2534b5', 'symplify/symfony-php-config' => 'v9.3.0@0a5bf9f1d7d970f2df2b4e4225c297bd774c23c8', 'symplify/symplify-kernel' => 'v9.3.1@4f895a22b50579ad0767f6b18f2e0aaf8b11fcac', 'tracy/tracy' => 'v2.8.4@cb7d3dcd9469aa2aa6722edf6bee2d5d75188079', 'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25', 'rector/rector' => '0.10.x-dev@', 'rector/rector-src' => '0.10.x-dev@');
    private function __construct()
    {
    }
    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!\class_exists(\Composer\InstalledVersions::class, \false) || !\Composer\InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }
        return \Composer\InstalledVersions::getRootPackage()['name'];
    }
    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName) : string
    {
        if (\class_exists(\Composer\InstalledVersions::class, \false) && \Composer\InstalledVersions::getRawData()) {
            return \Composer\InstalledVersions::getPrettyVersion($packageName) . '@' . \Composer\InstalledVersions::getReference($packageName);
        }
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }
        throw new \OutOfBoundsException('Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files');
    }
}
