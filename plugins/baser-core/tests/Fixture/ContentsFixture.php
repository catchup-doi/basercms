<?php
declare(strict_types=1);

namespace BaserCore\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContentsFixture
 */
class ContentsFixture extends TestFixture
{
    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'contents'];

    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => '',
                'plugin' => 'Core',
                'type' => 'ContentFolder',
                'entity_id' => 1,
                'url' => '/',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => null,
                'lft' => 1,
                'rght' => 20,
                'level' => 0,
                'title' => 'baserCMSサンプル',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => 'default',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => null,
                'modified_date' => '2019-06-11 12:27:01',
                'site_root' => true,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:02:53',
                'modified' => '2020-09-14 21:10:41',
            ],
            [
                'id' => 4,
                'name' => 'index',
                'plugin' => 'Core',
                'type' => 'Page',
                'entity_id' => 1,
                'url' => '/index',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 2,
                'rght' => 3,
                'level' => 1,
                'title' => 'トップページ',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-29 18:13:03',
                'modified_date' => '2020-09-14 20:13:10',
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:13:03',
                'modified' => '2020-09-14 20:13:25',
            ],
            [
                'id' => 5,
                'name' => 'about',
                'plugin' => 'Core',
                'type' => 'Page',
                'entity_id' => 2,
                'url' => '/about',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 6,
                'rght' => 7,
                'level' => 1,
                'title' => '会社案内',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-29 18:13:55',
                'modified_date' => '2020-09-14 19:52:55',
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:13:56',
                'modified' => '2020-09-14 19:53:48',
            ],
            [
                'id' => 6,
                'name' => 'service',
                'plugin' => 'Core',
                'type' => 'ContentFolder',
                'entity_id' => 4,
                'url' => '/service/',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 8,
                'rght' => 15,
                'level' => 1,
                'title' => 'サービス',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-29 18:14:33',
                'modified_date' => null,
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:14:33',
                'modified' => '2016-07-29 18:14:54',
            ],
            [
                'id' => 7,
                'name' => 'sample',
                'plugin' => 'Core',
                'type' => 'Page',
                'entity_id' => 5,
                'url' => '/sample',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 18,
                'rght' => 19,
                'level' => 1,
                'title' => 'サンプル',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-29 18:15:14',
                'modified_date' => '2020-09-14 22:27:49',
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:15:14',
                'modified' => '2020-09-14 22:30:21',
            ],
            [
                'id' => 9,
                'name' => 'contact',
                'plugin' => 'Mail',
                'type' => 'MailContent',
                'entity_id' => 1,
                'url' => '/contact/',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 16,
                'rght' => 17,
                'level' => 1,
                'title' => 'お問い合わせ',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-30 21:51:49',
                'modified_date' => '2020-09-14 19:36:02',
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-30 21:51:49',
                'modified' => '2020-09-14 19:37:11',
            ],
            [
                'id' => 10,
                'name' => 'news',
                'plugin' => 'Blog',
                'type' => 'BlogContent',
                'entity_id' => 1,
                'url' => '/news/',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 4,
                'rght' => 5,
                'level' => 1,
                'title' => 'NEWS',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 15:01:41',
                'modified_date' => '2020-09-14 19:27:41',
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 15:01:41',
                'modified' => '2020-09-14 19:27:57',
            ],
            [
                'id' => 11,
                'name' => 'service1',
                'plugin' => 'Core',
                'type' => 'Page',
                'entity_id' => 3,
                'url' => '/service/service1',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 6,
                'lft' => 9,
                'rght' => 10,
                'level' => 2,
                'title' => 'サービス１',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 16:46:32',
                'modified_date' => null,
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 16:46:32',
                'modified' => '2016-08-12 00:58:02',
            ],
            [
                'id' => 12,
                'name' => 'service2',
                'plugin' => 'Core',
                'type' => 'Page',
                'entity_id' => 6,
                'url' => '/service/service2',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 6,
                'lft' => 11,
                'rght' => 12,
                'level' => 2,
                'title' => 'サービス２',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 16:46:47',
                'modified_date' => null,
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 16:46:47',
                'modified' => '2016-08-12 00:58:58',
            ],
            [
                'id' => 13,
                'name' => 'service3',
                'plugin' => 'Core',
                'type' => 'Page',
                'entity_id' => 7,
                'url' => '/service/service3',
                'site_id' => 0,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 6,
                'lft' => 13,
                'rght' => 14,
                'level' => 2,
                'title' => 'サービス３',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 16:47:04',
                'modified_date' => null,
                'site_root' => false,
                'deleted_date' => null,
                'deleted' => false,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 16:47:04',
                'modified' => '2016-08-12 00:59:06',
            ],
            // BcContentsComponentTest
            [
                'id' => 14,
                'plugin' => 'Core',
                'name' => 'BcContentsテスト',
                'type' => "BcContentsTest",
                'entity_id' => 1,
                'deleted' => true,
            ],
        ];
        parent::init();
    }
}
