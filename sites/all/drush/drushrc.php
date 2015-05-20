<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'field_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'poll' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'number' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'list' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.35',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7079',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7014',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.35',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'overlay' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud.test',
            10 => 'tests/entity_crud_hook_test.test',
            11 => 'tests/entity_query.test',
            12 => 'tests/error.test',
            13 => 'tests/file.test',
            14 => 'tests/filetransfer.test',
            15 => 'tests/form.test',
            16 => 'tests/graph.test',
            17 => 'tests/image.test',
            18 => 'tests/lock.test',
            19 => 'tests/mail.test',
            20 => 'tests/menu.test',
            21 => 'tests/module.test',
            22 => 'tests/pager.test',
            23 => 'tests/password.test',
            24 => 'tests/path.test',
            25 => 'tests/registry.test',
            26 => 'tests/schema.test',
            27 => 'tests/session.test',
            28 => 'tests/tablesort.test',
            29 => 'tests/theme.test',
            30 => 'tests/unicode.test',
            31 => 'tests/update.test',
            32 => 'tests/xmlrpc.test',
            33 => 'tests/upgrade/upgrade.test',
            34 => 'tests/upgrade/upgrade.comment.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/upgrade.upload.test',
            44 => 'tests/upgrade/upgrade.user.test',
            45 => 'tests/upgrade/update.aggregator.test',
            46 => 'tests/upgrade/update.trigger.test',
            47 => 'tests/upgrade/update.field.test',
            48 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'dashboard' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.35',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'contextual' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.35',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'addressfield' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'addressfield.migrate.inc',
            1 => 'views/addressfield_views_handler_field_country.inc',
            2 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'addressfield',
          'datestamp' => '1429819382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'addressfield',
        'version' => '7.x-1.1',
      ),
      'node_export_dependency' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_dependency/node_export_dependency.module',
        'basename' => 'node_export_dependency.module',
        'name' => 'node_export_dependency',
        'info' => 
        array (
          'name' => 'Node export dependency (experimental)',
          'description' => 'Helps maintain relationships to dependent entities.  Intended to make Node export relation obsolete.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_features' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_features/node_export_features.module',
        'basename' => 'node_export_features.module',
        'name' => 'node_export_features',
        'info' => 
        array (
          'name' => 'Node export features',
          'description' => 'Adds Features support to Node export, so you can put your exports into Features modules.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
            2 => 'features',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_relation' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_relation/node_export_relation.module',
        'basename' => 'node_export_relation.module',
        'name' => 'node_export_relation',
        'info' => 
        array (
          'name' => 'Node export relation (deprecated)',
          'description' => 'Helps maintain relationships.  Supports node references, taxonomy, and organic groups.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_feeds' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_feeds/node_export_feeds.module',
        'basename' => 'node_export_feeds.module',
        'name' => 'node_export_feeds',
        'info' => 
        array (
          'name' => 'Node export feeds',
          'description' => 'Node export feeds importer.  This is a more advanced importer than the one built into node export, but tricky to use.',
          'core' => '7.x',
          'package' => 'Node export',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'node_export',
          ),
          'files' => 
          array (
            0 => 'FeedsNodeExportParser.inc',
            1 => 'FeedsNodeExportProcessor.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/node_export.module',
        'basename' => 'node_export.module',
        'name' => 'node_export',
        'info' => 
        array (
          'name' => 'Node export',
          'description' => 'Allows users to export content and then import into another Drupal installation.',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'configure' => 'admin/config/content/node_export',
          'files' => 
          array (
            0 => 'views/views_handler_field_node_link_export.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.16',
          'project' => 'ckeditor',
          'datestamp' => '1413311935',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ckeditor',
        'version' => '7.x-1.16',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'term_depth' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'views_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.7',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'nikadevs_dev' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/_custom/nikadevs_dev/nikadevs_dev.module',
        'basename' => 'nikadevs_dev.module',
        'name' => 'nikadevs_dev',
        'info' => 
        array (
          'name' => 'NikaDevs Development',
          'description' => 'Functions for releasing themes',
          'package' => 'NikaDevs',
          'version' => '7.x - 0.1',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x - 0.1',
      ),
      'entity_token' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.6',
      ),
      'entity' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'entity',
        'version' => '7.x-1.6',
      ),
      'rhythm_shortcodes' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_shortcodes/rhythm_shortcodes.module',
        'basename' => 'rhythm_shortcodes.module',
        'name' => 'rhythm_shortcodes',
        'info' => 
        array (
          'name' => 'Rhythm Shortcodes',
          'description' => 'Shortcodes for Rhythm theme',
          'package' => 'NikaDevs',
          'version' => '7.x - 1.0',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x - 1.0',
      ),
      'rhythm_features' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_features/rhythm_features.module',
        'basename' => 'rhythm_features.module',
        'name' => 'rhythm_features',
        'info' => 
        array (
          'name' => 'Rhythm Features',
          'description' => 'Node types, views, image styles and other elements for Rhythm theme.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.1',
          'project' => 'rhythm_features',
          'dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'commerce_line_item',
            2 => 'ctools',
            3 => 'features',
            4 => 'image',
            5 => 'link',
            6 => 'media',
            7 => 'nikadevs_cms',
            8 => 'rhythm_cms',
            9 => 'shortcode',
            10 => 'taxonomy',
            11 => 'text',
            12 => 'views',
          ),
          'features' => 
          array (
            'ckeditor_profile' => 
            array (
              0 => 'Full',
            ),
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
              1 => 'comment_body',
              2 => 'field_blog_category',
              3 => 'field_description',
              4 => 'field_file_image_alt_text',
              5 => 'field_file_image_title_text',
              6 => 'field_gallery',
              7 => 'field_image',
              8 => 'field_images',
              9 => 'field_lead_text',
              10 => 'field_portfolio_category',
              11 => 'field_position',
              12 => 'field_project',
              13 => 'field_project_link',
              14 => 'field_second_title',
              15 => 'field_short_description',
              16 => 'field_social_links',
            ),
            'field_instance' => 
            array (
              0 => 'file-image-field_file_image_alt_text',
              1 => 'file-image-field_file_image_title_text',
              2 => 'node-gallery_item-field_gallery',
              3 => 'node-gallery_item-field_image',
              4 => 'node-nd_blog-body',
              5 => 'node-nd_blog-field_blog_category',
              6 => 'node-nd_blog-field_images',
              7 => 'node-nd_blog-field_lead_text',
              8 => 'node-nd_blog-field_second_title',
              9 => 'node-nd_page-body',
              10 => 'node-nd_person-body',
              11 => 'node-nd_person-field_image',
              12 => 'node-nd_person-field_position',
              13 => 'node-nd_person-field_social_links',
              14 => 'node-nd_portfolio-body',
              15 => 'node-nd_portfolio-field_category',
              16 => 'node-nd_portfolio-field_description',
              17 => 'node-nd_portfolio-field_images',
              18 => 'node-nd_portfolio-field_portfolio_category',
              19 => 'node-nd_portfolio-field_project',
              20 => 'node-nd_portfolio-field_project_link',
            ),
            'filter' => 
            array (
              0 => 'dynamic_shortcodes',
              1 => 'nd_ckeditor',
              2 => 'shortcodes',
            ),
            'image' => 
            array (
              0 => 'blog_1140x642',
              1 => 'blog_360x195',
              2 => 'blog_360xauto',
              3 => 'gallery_165x106',
              4 => 'gallery_263x169',
              5 => 'gallery_360x232',
              6 => 'gallery_555x357',
              7 => 'logo_autox67',
              8 => 'person_360x438',
              9 => 'portfolio_285x183',
              10 => 'portfolio_325xauto',
              11 => 'portfolio_378x243',
              12 => 'portfolio_570x367',
              13 => 'portfolio_650xauto',
              14 => 'portfolio_653x368',
              15 => 'portfolio_900xauto',
            ),
            'node' => 
            array (
              0 => 'gallery_item',
              1 => 'nd_blog',
              2 => 'nd_page',
              3 => 'nd_person',
              4 => 'nd_portfolio',
              5 => 'webform',
            ),
            'taxonomy' => 
            array (
              0 => 'blog_category',
              1 => 'category',
              2 => 'gallery',
              3 => 'portfolio_category',
              4 => 'project',
            ),
            'views_view' => 
            array (
              0 => 'blog_fullwidth',
              1 => 'blog_grid',
              2 => 'blog_masonry',
              3 => 'gallery',
              4 => 'last_posts',
              5 => 'manage_cms',
              6 => 'portfolio_boxed',
              7 => 'portfolio_parallax',
              8 => 'portfolio_promo',
              9 => 'products_comments',
              10 => 'related_projects',
              11 => 'shop_categories',
              12 => 'team',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'options' => 'options',
            ),
            'field_base' => 
            array (
              'field_category' => 'field_category',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_features',
        'version' => '7.x-1.1',
      ),
      'rhythm_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_content/rhythm_content.module',
        'basename' => 'rhythm_content.module',
        'name' => 'rhythm_content',
        'info' => 
        array (
          'name' => 'Rhythm Content',
          'description' => 'Content for Rhythm theme.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.1',
          'project' => 'rhythm_content',
          'dependencies' => 
          array (
            0 => 'node_export_features',
            1 => 'node',
            2 => 'node_export_features',
            3 => 'text',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'node_export_features' => 
            array (
              0 => '00a2dea4-c270-4eba-a4c6-2cc0d962dfb6',
              1 => '02dd6041-d4d5-41a3-a03d-ad2e17f504ea',
              2 => '031d4296-1dcf-419f-887f-9a042f74ac17',
              3 => '03a2dabb-fdf8-4de7-9509-67bf72d56721',
              4 => '03a638f2-bc4c-4653-a948-266d11ba855f',
              5 => '0509bd2c-6cfd-4d44-bf17-ad4ad412fcac',
              6 => '058faacf-e4e1-46fb-840c-66d59bd7e614',
              7 => '05e785f3-ea17-4146-a410-17d26051e1af',
              8 => '085916aa-fed5-4fe5-8a02-04644cff368a',
              9 => '0a205fa3-e043-4776-a1b5-c61d7c5e4990',
              10 => '0cdc7b97-a943-4493-a465-71dafe58ca29',
              11 => '0e3f7f28-02b6-477e-a4c2-4bd5b69978d9',
              12 => '11a89319-5f44-482e-a3ad-e6700cd3627e',
              13 => '1ac5b1e1-e257-4b38-846f-70e907239c6d',
              14 => '1d250aa0-e791-49af-8512-55c1342b04e6',
              15 => '1df45ff3-27c6-4a78-b63b-f83237bc0462',
              16 => '2012d228-62f5-481c-89f4-5eef049aec3c',
              17 => '21984847-ca5a-4ec2-a5aa-1064fc65333e',
              18 => '219e47e2-4a3d-44bf-96be-ff346e5a0b47',
              19 => '21c6aad3-77c1-4ff5-baa9-fb5c540fbf91',
              20 => '2441ddce-3881-4413-8f2a-f4d3ef0c4d3a',
              21 => '2532d3ef-f56f-402a-9abe-b49d73941a2f',
              22 => '26d90f62-6884-4bdf-9cec-290665c5a84d',
              23 => '27c8ec7c-52e2-4570-856b-b5ecace1ef97',
              24 => '2c011fd6-9032-4ec5-923b-c9289d2a2332',
              25 => '2cdbb84b-e54b-4baf-8e22-38a53d751245',
              26 => '2fd6e5b6-924e-40d2-a679-8a90c303c212',
              27 => '360e075f-b886-4010-a76f-a6326871c2a8',
              28 => '3a1e4d4b-01fc-4fd3-8c74-aaab4f00f7d5',
              29 => '3d8df4aa-ad9c-4bea-93fd-6de62bb99761',
              30 => '413059d3-e85e-4e6d-a489-d4209d65937d',
              31 => '4354489d-3182-440b-90ae-d33049b14f1b',
              32 => '45e0f222-9929-4d0b-9dca-6108231ea999',
              33 => '4849416e-5e51-4c3e-8968-4d96313c4805',
              34 => '4d3e434b-fadc-4b23-ac64-d2bd004f4a73',
              35 => '4dcec82b-e3e6-4140-9e11-1e8aa1fffb28',
              36 => '52116e6a-64cb-493b-a6f4-a886d3a254c7',
              37 => '590fd37d-07d8-44d4-8fc8-92f056962a55',
              38 => '5c3b91c6-2a84-4d52-9b8e-c320e7cfb6f7',
              39 => '5cf82817-9d71-41db-aeed-f265d6e2c810',
              40 => '60413bbf-2762-45a8-aee2-a9f1d57a3011',
              41 => '6a4a8bd6-ff57-4523-ab0d-91345154b0fb',
              42 => '6b9b70da-a234-46ab-9bdd-23ec85ac0006',
              43 => '6fc66d74-5b89-40c4-9dba-5a5feeb3c2db',
              44 => '70b4ef81-a68b-4c1c-8856-7551ca400e6c',
              45 => '7283917b-a7a3-4939-b15a-8d8a1f51ae7f',
              46 => '73b001be-bf5c-4e92-a4ad-79f1053f91c8',
              47 => '770eeaea-afbe-4e96-8edd-fbf333b639db',
              48 => '77290f23-a514-415f-b9cc-7d746ae7320a',
              49 => '7b8432d7-bc3e-406f-9689-085f5b836b6d',
              50 => '7b9a8f4f-aef2-4a27-b236-d0c82b27cf01',
              51 => '7b9bc46d-9c62-4c71-828e-cc14ee8ca633',
              52 => '7bd7fb43-805c-401f-882a-fa512cc272a7',
              53 => '7c3c484e-c6df-41be-afaa-7b06f7c157d4',
              54 => '7e71a5fd-bebc-4203-889d-58df907ae4ed',
              55 => '7ebcefa9-afbc-4a53-aff1-1d1a61974368',
              56 => '80391b63-b1ec-4add-b176-c84f38044403',
              57 => '81c019ef-4ce0-42ec-95e8-84a97d8a97f9',
              58 => '83eff5d3-057d-4c19-9500-2ee4b3f18f32',
              59 => '8d950bad-2711-4070-98f2-e0adc0ebaae5',
              60 => '8f72d3bf-93f1-4bac-b2f7-a9e7a706958c',
              61 => '952712c2-4c77-4cbc-b7fe-999a3f4ddf05',
              62 => '96131933-3248-4f25-9ab0-ca3144035f7f',
              63 => '961f8fcc-051f-4ac1-8031-4e1b5f070d2e',
              64 => '9716be13-86b3-4c03-a3d2-56704a8b0bdf',
              65 => '974e6794-075a-4c7a-a161-5523c35ec707',
              66 => '99115dd4-396a-4f25-9bf0-23f443c1b781',
              67 => 'a4253605-69da-4e9f-be8e-80b46ace40fd',
              68 => 'a4b0d079-fbd3-4954-9248-36f6b2ec4534',
              69 => 'a5ba8bd6-5b3d-44de-bd37-8c2f7d9fc41b',
              70 => 'a68caf67-0e73-4024-9789-68daf2f601f2',
              71 => 'a778aedf-6c55-42f1-917e-32678dd0ed3e',
              72 => 'a9aada27-0e45-4269-878c-6f4cf2fc524a',
              73 => 'abc8a66e-8bfb-4cf7-90c8-994cc90233d3',
              74 => 'ae173b7e-9c33-4501-ba1b-5956946ea31a',
              75 => 'b4c0d3cd-6af4-46b8-9fbb-290b802dfe00',
              76 => 'b5e57a87-f605-448e-a101-ded2a95f9cb1',
              77 => 'b630b861-fe59-4b66-82ce-136cc8372008',
              78 => 'b665c72d-b499-4a8b-9ac5-fd831b9880b6',
              79 => 'b6ff72cb-b965-4523-a478-1d343eb8fedf',
              80 => 'bb590df1-6c46-406a-8ab9-656a10001835',
              81 => 'bffc652e-ac6a-43c7-8d57-159089acd4a2',
              82 => 'c410dddb-2204-477c-aeba-c5de8e99a174',
              83 => 'c6a7a94d-66ed-48a1-8f82-4b191e7d28ce',
              84 => 'cfeca766-5db2-47cd-8e03-af897f4ff751',
              85 => 'd6b32770-e003-4e8c-9915-edd70b8909e2',
              86 => 'dc5cfd8a-5ffb-4aa9-a80f-e24c73f6b22f',
              87 => 'dd595e1d-3b8a-40d6-97bf-48b577ade41c',
              88 => 'e09a224a-0451-453f-b0c7-41aa9e245b96',
              89 => 'e5032da0-f869-4295-b01b-e815cc0001b4',
              90 => 'e9f616a7-8006-416b-a361-6cb9f17b6533',
              91 => 'ee69f089-a3b5-4261-9155-4d5ee768c171',
              92 => 'efade072-eb91-43e4-b8eb-7c42a0f68b34',
              93 => 'f135709d-b508-4809-bc48-80d1e316fdec',
              94 => 'f1c476ef-d422-4543-8fc9-9980ec23f0ea',
              95 => 'f27952c8-e674-41ef-adad-753e8b777756',
              96 => 'f4e9bd71-d2ab-4e6b-b376-26b03aba1aa3',
              97 => 'f7854d6c-001f-414c-96a9-f37db8bf25de',
              98 => 'f8a3f063-85d1-40a9-963b-86bf7feaa320',
            ),
          ),
          'features_exclude' => 
          array (
            'node' => 
            array (
              'nd_blog' => 'nd_blog',
              'gallery_item' => 'gallery_item',
              'nd_page' => 'nd_page',
              'nd_person' => 'nd_person',
              'nd_portfolio' => 'nd_portfolio',
              'nd_product_display' => 'nd_product_display',
              'webform' => 'webform',
            ),
            'dependencies' => 
            array (
              'commerce_cart' => 'commerce_cart',
              'commerce_product_reference' => 'commerce_product_reference',
              'features' => 'features',
              'fivestar' => 'fivestar',
              'image' => 'image',
              'link' => 'link',
              'media' => 'media',
              'options' => 'options',
              'rhythm_cms' => 'rhythm_cms',
              'taxonomy' => 'taxonomy',
            ),
            'field_base' => 
            array (
              'body' => 'body',
              'field_images' => 'field_images',
              'field_category' => 'field_category',
              'field_tags' => 'field_tags',
              'field_description' => 'field_description',
              'field_rating' => 'field_rating',
              'field_products' => 'field_products',
              'field_second_title' => 'field_second_title',
              'field_lead_text' => 'field_lead_text',
              'field_image' => 'field_image',
              'field_social_links' => 'field_social_links',
              'field_position' => 'field_position',
              'field_gallery' => 'field_gallery',
              'field_project_link' => 'field_project_link',
              'field_project' => 'field_project',
              'field_blog_category' => 'field_blog_category',
              'field_portfolio_category' => 'field_portfolio_category',
            ),
            'field_instance' => 
            array (
              'node-gallery_item-field_gallery' => 'node-gallery_item-field_gallery',
              'node-gallery_item-field_image' => 'node-gallery_item-field_image',
              'node-nd_blog-body' => 'node-nd_blog-body',
              'node-nd_blog-field_category' => 'node-nd_blog-field_category',
              'node-nd_blog-field_images' => 'node-nd_blog-field_images',
              'node-nd_blog-field_lead_text' => 'node-nd_blog-field_lead_text',
              'node-nd_blog-field_second_title' => 'node-nd_blog-field_second_title',
              'node-nd_page-body' => 'node-nd_page-body',
              'node-nd_person-body' => 'node-nd_person-body',
              'node-nd_person-field_image' => 'node-nd_person-field_image',
              'node-nd_person-field_position' => 'node-nd_person-field_position',
              'node-nd_person-field_social_links' => 'node-nd_person-field_social_links',
              'node-nd_portfolio-body' => 'node-nd_portfolio-body',
              'node-nd_portfolio-field_category' => 'node-nd_portfolio-field_category',
              'node-nd_portfolio-field_description' => 'node-nd_portfolio-field_description',
              'node-nd_portfolio-field_images' => 'node-nd_portfolio-field_images',
              'node-nd_portfolio-field_project' => 'node-nd_portfolio-field_project',
              'node-nd_portfolio-field_project_link' => 'node-nd_portfolio-field_project_link',
              'node-nd_product_display-field_category' => 'node-nd_product_display-field_category',
              'node-nd_product_display-field_products' => 'node-nd_product_display-field_products',
              'node-nd_product_display-field_rating' => 'node-nd_product_display-field_rating',
              'node-nd_product_display-field_tags' => 'node-nd_product_display-field_tags',
              'node-nd_blog-field_blog_category' => 'node-nd_blog-field_blog_category',
              'node-nd_portfolio-field_portfolio_category' => 'node-nd_portfolio-field_portfolio_category',
            ),
            'taxonomy' => 
            array (
              'category' => 'category',
              'gallery' => 'gallery',
              'project' => 'project',
              'tags' => 'tags',
              'blog_category' => 'blog_category',
              'portfolio_category' => 'portfolio_category',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_content',
        'version' => '7.x-1.1',
      ),
      'rhythm_commerce' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_commerce/rhythm_commerce.module',
        'basename' => 'rhythm_commerce.module',
        'name' => 'rhythm_commerce',
        'info' => 
        array (
          'name' => 'Rhythm Commerce',
          'description' => 'Node types, views, image styles and other elements for Rhythm Commerce.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.1',
          'project' => 'rhythm_commerce',
          'dependencies' => 
          array (
            0 => 'commerce_cart',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'commerce_product_ui',
            4 => 'ctools',
            5 => 'features',
            6 => 'fivestar',
            7 => 'image',
            8 => 'options',
            9 => 'properties',
            10 => 'taxonomy',
            11 => 'text',
            12 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_category',
              1 => 'field_old_price',
              2 => 'field_parameters',
              3 => 'field_products',
              4 => 'field_rating',
              5 => 'field_right_side_description',
              6 => 'field_sale_text',
              7 => 'field_tags',
            ),
            'field_instance' => 
            array (
              0 => 'node-nd_product_display-field_category',
              1 => 'node-nd_product_display-field_products',
              2 => 'node-nd_product_display-field_rating',
              3 => 'node-nd_product_display-field_tags',
            ),
            'image' => 
            array (
              0 => 'product_263x335',
              1 => 'product_70x70',
              2 => 'product_main_360x459',
              3 => 'product_small_68x86',
            ),
            'node' => 
            array (
              0 => 'nd_product_display',
            ),
            'taxonomy' => 
            array (
              0 => 'tags',
            ),
            'views_view' => 
            array (
              0 => 'products_best_sellers',
              1 => 'products_tags',
              2 => 'related_products',
              3 => 'shop_2_columns',
            ),
          ),
          'features_exclude' => 
          array (
            'taxonomy' => 
            array (
              'category' => 'category',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_commerce',
        'version' => '7.x-1.1',
      ),
      'rhythm_block' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_block/rhythm_block.module',
        'basename' => 'rhythm_block.module',
        'name' => 'rhythm_block',
        'info' => 
        array (
          'name' => 'Rhythm Block',
          'description' => 'Blocks for Rhythm theme.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.0',
          'project' => 'rhythm_block',
          'dependencies' => 
          array (
            0 => 'blockexport',
          ),
          'features' => 
          array (
            'blockexport_settings' => 
            array (
              0 => 'block_settings',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_block',
        'version' => '7.x-1.0',
      ),
      'rhythm_cms' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_cms.module',
        'basename' => 'rhythm_cms.module',
        'name' => 'rhythm_cms',
        'info' => 
        array (
          'name' => 'Rhythm theme module',
          'description' => 'Functions for Rhythm theme',
          'package' => 'NikaDevs',
          'version' => '7.x - 1.0',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x - 1.0',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'jquery_update' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.5',
          'project' => 'jquery_update',
          'datestamp' => '1422221882',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.5',
      ),
      'libraries' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'token',
          'datestamp' => '1425149060',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.6',
      ),
      'features' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.5',
          'project' => 'features',
          'datestamp' => '1428944073',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.5',
      ),
      'nd_visualshortcodes' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/nikadevs_cms/modules/nd_visualshortcodes/nd_visualshortcodes.module',
        'basename' => 'nd_visualshortcodes.module',
        'name' => 'nd_visualshortcodes',
        'info' => 
        array (
          'name' => 'NikaDevs Visual Shortcodes',
          'description' => 'Visual Shortcodes Editor',
          'package' => 'NikaDevs',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'shortcode',
          ),
          'configure' => 'admin/config/content/nd_visualshortcodes',
          'version' => '7.x-1.0',
          'project' => 'NikaDevs',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'NikaDevs',
        'version' => '7.x-1.0',
      ),
      'nikadevs_cms' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/nikadevs_cms/nikadevs_cms.module',
        'basename' => 'nikadevs_cms.module',
        'name' => 'nikadevs_cms',
        'info' => 
        array (
          'name' => 'NikaDevs Main Functions',
          'description' => 'All required functions for NikaDevs themes.',
          'package' => 'NikaDevs',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'shortcode',
          ),
          'version' => '7.x-1.0',
          'project' => 'NikaDevs',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'NikaDevs',
        'version' => '7.x-1.0',
      ),
      'commerce_payment_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/payment/modules/commerce_payment_example.module',
        'basename' => 'commerce_payment_example.module',
        'name' => 'commerce_payment_example',
        'info' => 
        array (
          'name' => 'Payment Method Example',
          'description' => 'Provides an example payment method for testing and development.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_payment' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/payment/commerce_payment.module',
        'basename' => 'commerce_payment.module',
        'name' => 'commerce_payment',
        'info' => 
        array (
          'name' => 'Payment',
          'description' => 'Implement core payment features for Drupal commerce.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_order',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment.rules.inc',
            1 => 'includes/commerce_payment_transaction.controller.inc',
            2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
            3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
            4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
            5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
            6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
            7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
            8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
            9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
            10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
            11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
            12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
            13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
            14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
            15 => 'tests/commerce_payment.rules.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_payment_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/payment/commerce_payment_ui.module',
        'basename' => 'commerce_payment_ui.module',
        'name' => 'commerce_payment_ui',
        'info' => 
        array (
          'name' => 'Payment UI',
          'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_order',
            3 => 'commerce_order_ui',
            4 => 'commerce_payment',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/payment-methods',
          'files' => 
          array (
            0 => 'tests/commerce_payment_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_cart' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/cart/commerce_cart.module',
        'basename' => 'commerce_cart.module',
        'name' => 'commerce_cart',
        'info' => 
        array (
          'name' => 'Cart',
          'description' => 'Implements the shopping cart system and add to cart features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_checkout',
            2 => 'commerce_line_item',
            3 => 'commerce_order',
            4 => 'commerce_product',
            5 => 'commerce_product_pricing',
            6 => 'commerce_product_reference',
            7 => 'entity',
            8 => 'rules',
            9 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
            1 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
            2 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
            3 => 'tests/commerce_cart.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_customer' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/customer/commerce_customer.module',
        'basename' => 'commerce_customer.module',
        'name' => 'commerce_customer',
        'info' => 
        array (
          'name' => 'Customer',
          'description' => 'Defines the Customer entity with Address Field integration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'commerce',
            2 => 'entity',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_customer_profile.controller.inc',
            1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
            3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
            4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
            5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
            6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
            7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_customer_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/customer/commerce_customer_ui.module',
        'basename' => 'commerce_customer_ui.module',
        'name' => 'commerce_customer_ui',
        'info' => 
        array (
          'name' => 'Customer UI',
          'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_customer',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/customer-profiles/types',
          'files' => 
          array (
            0 => 'tests/commerce_customer_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_price' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/price/commerce_price.module',
        'basename' => 'commerce_price.module',
        'name' => 'commerce_price',
        'info' => 
        array (
          'name' => 'Price',
          'description' => 'Defines the price field and a price alteration system.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_price.rules.inc',
            1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
            2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product/commerce_product_ui.module',
        'basename' => 'commerce_product_ui.module',
        'name' => 'commerce_product_ui',
        'info' => 
        array (
          'name' => 'Product UI',
          'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_product',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/products/types',
          'files' => 
          array (
            0 => 'tests/commerce_product_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product/commerce_product.module',
        'basename' => 'commerce_product.module',
        'name' => 'commerce_product',
        'info' => 
        array (
          'name' => 'Product',
          'description' => 'Defines the Product entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_product.controller.inc',
            1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
            3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
            4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
            5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
            6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
            7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
            8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
            9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
            10 => 'includes/commerce_product.translation_handler.inc',
            11 => 'tests/commerce_product.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_order' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/order/commerce_order.module',
        'basename' => 'commerce_order.module',
        'name' => 'commerce_order',
        'info' => 
        array (
          'name' => 'Order',
          'description' => 'Defines the Order entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_customer',
            2 => 'commerce_line_item',
            3 => 'commerce_price',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_order.controller.inc',
            1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
            3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
            4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
            5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
            6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
            7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
            8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
            9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
            10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
            11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
            12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
            13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
            14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
            15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
            16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
            17 => 'tests/commerce_order.rules.test',
            18 => 'tests/commerce_order.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7109',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_order_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/order/commerce_order_ui.module',
        'basename' => 'commerce_order_ui.module',
        'name' => 'commerce_order_ui',
        'info' => 
        array (
          'name' => 'Order UI',
          'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'commerce_order',
            5 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/order',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
            1 => 'tests/commerce_order_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_reference' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product_reference/commerce_product_reference.module',
        'basename' => 'commerce_product_reference.module',
        'name' => 'commerce_product_reference',
        'info' => 
        array (
          'name' => 'Product Reference',
          'description' => 'Defines a product reference field and default display formatters.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product',
            4 => 'entity',
            5 => 'options',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
            1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
            2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
            3 => 'tests/commerce_product_reference.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_tax' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/tax/commerce_tax.module',
        'basename' => 'commerce_tax.module',
        'name' => 'commerce_tax',
        'info' => 
        array (
          'name' => 'Tax',
          'description' => 'Define tax rates and configure tax rules for applicability and display.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product_pricing',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_tax_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/tax/commerce_tax_ui.module',
        'basename' => 'commerce_tax_ui.module',
        'name' => 'commerce_tax_ui',
        'info' => 
        array (
          'name' => 'Tax UI',
          'description' => 'Provides a UI for creating simple tax types and rates.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_tax',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/taxes',
          'files' => 
          array (
            0 => 'tests/commerce_tax_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_pricing' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product_pricing/commerce_product_pricing.module',
        'basename' => 'commerce_product_pricing.module',
        'name' => 'commerce_product_pricing',
        'info' => 
        array (
          'name' => 'Product Pricing',
          'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_pricing_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
        'basename' => 'commerce_product_pricing_ui.module',
        'name' => 'commerce_product_pricing_ui',
        'info' => 
        array (
          'name' => 'Product Pricing UI',
          'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
            5 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/product-pricing',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_checkout' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/checkout/commerce_checkout.module',
        'basename' => 'commerce_checkout.module',
        'name' => 'commerce_checkout',
        'info' => 
        array (
          'name' => 'Checkout',
          'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_order',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/checkout',
          'files' => 
          array (
            0 => 'tests/commerce_checkout.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_line_item' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/line_item/commerce_line_item.module',
        'basename' => 'commerce_line_item.module',
        'name' => 'commerce_line_item',
        'info' => 
        array (
          'name' => 'Line Item',
          'description' => 'Defines the Line Item entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_line_item.controller.inc',
            1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
            2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
            3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
            4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
            5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
            6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
            7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_line_item_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/line_item/commerce_line_item_ui.module',
        'basename' => 'commerce_line_item_ui.module',
        'name' => 'commerce_line_item_ui',
        'info' => 
        array (
          'name' => 'Line Item UI',
          'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/line-items',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/commerce.module',
        'basename' => 'commerce.module',
        'name' => 'commerce',
        'info' => 
        array (
          'name' => 'Commerce',
          'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'system',
            1 => 'entity',
            2 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_base.test',
            1 => 'includes/commerce.controller.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/commerce_ui.module',
        'basename' => 'commerce_ui.module',
        'name' => 'commerce_ui',
        'info' => 
        array (
          'name' => 'Commerce UI',
          'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'retina_images' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/retina_images/retina_images.module',
        'basename' => 'retina_images.module',
        'name' => 'retina_images',
        'info' => 
        array (
          'name' => 'Retina Images',
          'description' => 'Provide an image effect to output images in high resolution format for high resolution displays.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'retina_images',
          'datestamp' => '1365529216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'retina_images',
        'version' => '7.x-1.0-beta4',
      ),
      'views_export' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            92 => 'modules/field/views_handler_argument_field_list_string.inc',
            93 => 'modules/field/views_handler_filter_field_list.inc',
            94 => 'modules/filter/views_handler_field_filter_format_name.inc',
            95 => 'modules/locale/views_handler_field_node_language.inc',
            96 => 'modules/locale/views_handler_filter_node_language.inc',
            97 => 'modules/locale/views_handler_argument_locale_group.inc',
            98 => 'modules/locale/views_handler_argument_locale_language.inc',
            99 => 'modules/locale/views_handler_field_locale_group.inc',
            100 => 'modules/locale/views_handler_field_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            102 => 'modules/locale/views_handler_filter_locale_group.inc',
            103 => 'modules/locale/views_handler_filter_locale_language.inc',
            104 => 'modules/locale/views_handler_filter_locale_version.inc',
            105 => 'modules/node/views_handler_argument_dates_various.inc',
            106 => 'modules/node/views_handler_argument_node_language.inc',
            107 => 'modules/node/views_handler_argument_node_nid.inc',
            108 => 'modules/node/views_handler_argument_node_type.inc',
            109 => 'modules/node/views_handler_argument_node_vid.inc',
            110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_field_node.inc',
            113 => 'modules/node/views_handler_field_node_link.inc',
            114 => 'modules/node/views_handler_field_node_link_delete.inc',
            115 => 'modules/node/views_handler_field_node_link_edit.inc',
            116 => 'modules/node/views_handler_field_node_revision.inc',
            117 => 'modules/node/views_handler_field_node_revision_link.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            120 => 'modules/node/views_handler_field_node_path.inc',
            121 => 'modules/node/views_handler_field_node_type.inc',
            122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            123 => 'modules/node/views_handler_filter_node_access.inc',
            124 => 'modules/node/views_handler_filter_node_status.inc',
            125 => 'modules/node/views_handler_filter_node_type.inc',
            126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            127 => 'modules/node/views_plugin_argument_default_node.inc',
            128 => 'modules/node/views_plugin_argument_validate_node.inc',
            129 => 'modules/node/views_plugin_row_node_rss.inc',
            130 => 'modules/node/views_plugin_row_node_view.inc',
            131 => 'modules/profile/views_handler_field_profile_date.inc',
            132 => 'modules/profile/views_handler_field_profile_list.inc',
            133 => 'modules/profile/views_handler_filter_profile_selection.inc',
            134 => 'modules/search/views_handler_argument_search.inc',
            135 => 'modules/search/views_handler_field_search_score.inc',
            136 => 'modules/search/views_handler_filter_search.inc',
            137 => 'modules/search/views_handler_sort_search_score.inc',
            138 => 'modules/search/views_plugin_row_search_view.inc',
            139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            140 => 'modules/system/views_handler_argument_file_fid.inc',
            141 => 'modules/system/views_handler_field_file.inc',
            142 => 'modules/system/views_handler_field_file_extension.inc',
            143 => 'modules/system/views_handler_field_file_filemime.inc',
            144 => 'modules/system/views_handler_field_file_uri.inc',
            145 => 'modules/system/views_handler_field_file_status.inc',
            146 => 'modules/system/views_handler_filter_file_status.inc',
            147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            166 => 'modules/system/views_handler_filter_system_type.inc',
            167 => 'modules/translation/views_handler_argument_node_tnid.inc',
            168 => 'modules/translation/views_handler_field_node_link_translate.inc',
            169 => 'modules/translation/views_handler_field_node_translation_link.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid.inc',
            171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            172 => 'modules/translation/views_handler_relationship_translation.inc',
            173 => 'modules/user/views_handler_argument_user_uid.inc',
            174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            175 => 'modules/user/views_handler_field_user.inc',
            176 => 'modules/user/views_handler_field_user_language.inc',
            177 => 'modules/user/views_handler_field_user_link.inc',
            178 => 'modules/user/views_handler_field_user_link_cancel.inc',
            179 => 'modules/user/views_handler_field_user_link_edit.inc',
            180 => 'modules/user/views_handler_field_user_mail.inc',
            181 => 'modules/user/views_handler_field_user_name.inc',
            182 => 'modules/user/views_handler_field_user_permissions.inc',
            183 => 'modules/user/views_handler_field_user_picture.inc',
            184 => 'modules/user/views_handler_field_user_roles.inc',
            185 => 'modules/user/views_handler_filter_user_current.inc',
            186 => 'modules/user/views_handler_filter_user_name.inc',
            187 => 'modules/user/views_handler_filter_user_permissions.inc',
            188 => 'modules/user/views_handler_filter_user_roles.inc',
            189 => 'modules/user/views_plugin_argument_default_current_user.inc',
            190 => 'modules/user/views_plugin_argument_default_user.inc',
            191 => 'modules/user/views_plugin_argument_validate_user.inc',
            192 => 'modules/user/views_plugin_row_user_view.inc',
            193 => 'plugins/views_plugin_access.inc',
            194 => 'plugins/views_plugin_access_none.inc',
            195 => 'plugins/views_plugin_access_perm.inc',
            196 => 'plugins/views_plugin_access_role.inc',
            197 => 'plugins/views_plugin_argument_default.inc',
            198 => 'plugins/views_plugin_argument_default_php.inc',
            199 => 'plugins/views_plugin_argument_default_fixed.inc',
            200 => 'plugins/views_plugin_argument_default_raw.inc',
            201 => 'plugins/views_plugin_argument_validate.inc',
            202 => 'plugins/views_plugin_argument_validate_numeric.inc',
            203 => 'plugins/views_plugin_argument_validate_php.inc',
            204 => 'plugins/views_plugin_cache.inc',
            205 => 'plugins/views_plugin_cache_none.inc',
            206 => 'plugins/views_plugin_cache_time.inc',
            207 => 'plugins/views_plugin_display.inc',
            208 => 'plugins/views_plugin_display_attachment.inc',
            209 => 'plugins/views_plugin_display_block.inc',
            210 => 'plugins/views_plugin_display_default.inc',
            211 => 'plugins/views_plugin_display_embed.inc',
            212 => 'plugins/views_plugin_display_extender.inc',
            213 => 'plugins/views_plugin_display_feed.inc',
            214 => 'plugins/views_plugin_display_page.inc',
            215 => 'plugins/views_plugin_exposed_form_basic.inc',
            216 => 'plugins/views_plugin_exposed_form.inc',
            217 => 'plugins/views_plugin_exposed_form_input_required.inc',
            218 => 'plugins/views_plugin_localization_core.inc',
            219 => 'plugins/views_plugin_localization.inc',
            220 => 'plugins/views_plugin_localization_none.inc',
            221 => 'plugins/views_plugin_pager.inc',
            222 => 'plugins/views_plugin_pager_full.inc',
            223 => 'plugins/views_plugin_pager_mini.inc',
            224 => 'plugins/views_plugin_pager_none.inc',
            225 => 'plugins/views_plugin_pager_some.inc',
            226 => 'plugins/views_plugin_query.inc',
            227 => 'plugins/views_plugin_query_default.inc',
            228 => 'plugins/views_plugin_row.inc',
            229 => 'plugins/views_plugin_row_fields.inc',
            230 => 'plugins/views_plugin_row_rss_fields.inc',
            231 => 'plugins/views_plugin_style.inc',
            232 => 'plugins/views_plugin_style_default.inc',
            233 => 'plugins/views_plugin_style_grid.inc',
            234 => 'plugins/views_plugin_style_list.inc',
            235 => 'plugins/views_plugin_style_jump_menu.inc',
            236 => 'plugins/views_plugin_style_mapping.inc',
            237 => 'plugins/views_plugin_style_rss.inc',
            238 => 'plugins/views_plugin_style_summary.inc',
            239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            240 => 'plugins/views_plugin_style_summary_unformatted.inc',
            241 => 'plugins/views_plugin_style_table.inc',
            242 => 'tests/handlers/views_handlers.test',
            243 => 'tests/handlers/views_handler_area_text.test',
            244 => 'tests/handlers/views_handler_argument_null.test',
            245 => 'tests/handlers/views_handler_argument_string.test',
            246 => 'tests/handlers/views_handler_field.test',
            247 => 'tests/handlers/views_handler_field_boolean.test',
            248 => 'tests/handlers/views_handler_field_custom.test',
            249 => 'tests/handlers/views_handler_field_counter.test',
            250 => 'tests/handlers/views_handler_field_date.test',
            251 => 'tests/handlers/views_handler_field_file_extension.test',
            252 => 'tests/handlers/views_handler_field_file_size.test',
            253 => 'tests/handlers/views_handler_field_math.test',
            254 => 'tests/handlers/views_handler_field_url.test',
            255 => 'tests/handlers/views_handler_field_xss.test',
            256 => 'tests/handlers/views_handler_filter_combine.test',
            257 => 'tests/handlers/views_handler_filter_date.test',
            258 => 'tests/handlers/views_handler_filter_equality.test',
            259 => 'tests/handlers/views_handler_filter_in_operator.test',
            260 => 'tests/handlers/views_handler_filter_numeric.test',
            261 => 'tests/handlers/views_handler_filter_string.test',
            262 => 'tests/handlers/views_handler_sort_random.test',
            263 => 'tests/handlers/views_handler_sort_date.test',
            264 => 'tests/handlers/views_handler_sort.test',
            265 => 'tests/test_handlers/views_test_area_access.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            269 => 'tests/plugins/views_plugin_display.test',
            270 => 'tests/styles/views_plugin_style_jump_menu.test',
            271 => 'tests/styles/views_plugin_style.test',
            272 => 'tests/styles/views_plugin_style_base.test',
            273 => 'tests/styles/views_plugin_style_mapping.test',
            274 => 'tests/styles/views_plugin_style_unformatted.test',
            275 => 'tests/views_access.test',
            276 => 'tests/views_analyze.test',
            277 => 'tests/views_basic.test',
            278 => 'tests/views_argument_default.test',
            279 => 'tests/views_argument_validator.test',
            280 => 'tests/views_exposed_form.test',
            281 => 'tests/field/views_fieldapi.test',
            282 => 'tests/views_glossary.test',
            283 => 'tests/views_groupby.test',
            284 => 'tests/views_handlers.test',
            285 => 'tests/views_module.test',
            286 => 'tests/views_pager.test',
            287 => 'tests/views_plugin_localization_test.inc',
            288 => 'tests/views_translatable.test',
            289 => 'tests/views_query.test',
            290 => 'tests/views_upgrade.test',
            291 => 'tests/views_test.views_default.inc',
            292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            294 => 'tests/node/views_node_revision_relations.test',
            295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            296 => 'tests/user/views_handler_field_user_name.test',
            297 => 'tests/user/views_user_argument_default.test',
            298 => 'tests/user/views_user_argument_validate.test',
            299 => 'tests/user/views_user.test',
            300 => 'tests/views_cache.test',
            301 => 'tests/views_view.test',
            302 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'link' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'link',
          'datestamp' => '1413924830',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.3',
      ),
      'module_filter' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0',
          'project' => 'module_filter',
          'datestamp' => '1424631189',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'module_filter',
        'version' => '7.x-2.0',
      ),
      'shortcode_embed_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/shortcode/shortcode_embed_content/shortcode_embed_content.module',
        'basename' => 'shortcode_embed_content.module',
        'name' => 'shortcode_embed_content',
        'info' => 
        array (
          'name' => 'Shortcode Embed Content Tag',
          'description' => 'Provides a shortcode tag for embedding a node content into text.',
          'package' => 'Shortcode',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'shortcode',
          ),
          'version' => '7.x-2.21',
          'project' => 'shortcode',
          'datestamp' => '1429272782',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'shortcode',
        'version' => '7.x-2.21',
      ),
      'shortcode_basic_tags' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/shortcode/shortcode_basic_tags/shortcode_basic_tags.module',
        'basename' => 'shortcode_basic_tags.module',
        'name' => 'shortcode_basic_tags',
        'info' => 
        array (
          'name' => 'Shortcode Basic Tags',
          'description' => 'Provides basic shortcode tags like highlight, dropcap, etc.',
          'package' => 'Shortcode',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'shortcode',
          ),
          'version' => '7.x-2.21',
          'project' => 'shortcode',
          'datestamp' => '1429272782',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'shortcode',
        'version' => '7.x-2.21',
      ),
      'shortcode' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/shortcode/shortcode.module',
        'basename' => 'shortcode.module',
        'name' => 'shortcode',
        'info' => 
        array (
          'name' => 'Shortcode',
          'description' => 'Provides shortcodes filter framework and API (like WP shortcodes)',
          'package' => 'Shortcode',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '7.x-2.21',
          'project' => 'shortcode',
          'datestamp' => '1429272782',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'shortcode',
        'version' => '7.x-2.21',
      ),
      'properties_compare' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_compare/properties_compare.module',
        'basename' => 'properties_compare.module',
        'name' => 'properties_compare',
        'info' => 
        array (
          'name' => 'Dynamic Properties Comparison',
          'description' => 'Allows to compare content.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_compare.test',
          ),
          'dependencies' => 
          array (
            0 => 'properties',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties_generate' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_generate/properties_generate.module',
        'basename' => 'properties_generate.module',
        'name' => 'properties_generate',
        'info' => 
        array (
          'name' => 'Dynamic Properties Generation',
          'description' => 'Generate a random amount of categories and attributes.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_generate.module',
          ),
          'dependencies' => 
          array (
            0 => 'properties',
            1 => 'properties_sql',
            2 => 'devel_generate',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties_sql' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_sql/properties_sql.module',
        'basename' => 'properties_sql.module',
        'name' => 'properties_sql',
        'info' => 
        array (
          'name' => 'Dynamic Properties SQL',
          'description' => 'This module implements the attribute and category API with a SQL backend.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_sql.module',
            1 => 'properties_sql.install',
            2 => 'properties_sql.test',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties_template' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_template/properties_template.module',
        'basename' => 'properties_template.module',
        'name' => 'properties_template',
        'info' => 
        array (
          'name' => 'Dynamic Properties Template',
          'description' => 'This module implements the template functionality for properties.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_template.module',
            1 => 'properties_template.admin.inc',
            2 => 'properties_template.test',
          ),
          'dependencies' => 
          array (
            0 => 'properties',
          ),
          'configure' => 'admin/config/content/properties/templates',
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties.module',
        'basename' => 'properties.module',
        'name' => 'properties',
        'info' => 
        array (
          'name' => 'Dynamic Properties',
          'description' => 'Provides a dynamic property field that can contain an unlimited number of attribute value pairs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties.module',
            1 => 'properties.test',
          ),
          'dependencies' => 
          array (
            0 => 'properties_sql',
          ),
          'configure' => 'admin/config/content/properties',
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'votingapi' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/votingapi/votingapi.module',
        'basename' => 'votingapi.module',
        'name' => 'votingapi',
        'info' => 
        array (
          'name' => 'Voting API',
          'description' => 'Provides a shared voting API for other modules.',
          'package' => 'Voting',
          'core' => '7.x',
          'configure' => 'admin/config/search/votingapi',
          'files' => 
          array (
            0 => 'tests/votingapi.test',
            1 => 'views/votingapi_views_handler_field_value.inc',
            2 => 'views/votingapi_views_handler_sort_nullable.inc',
            3 => 'views/votingapi_views_handler_relationship.inc',
          ),
          'version' => '7.x-2.12',
          'project' => 'votingapi',
          'datestamp' => '1407995929',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'votingapi',
        'version' => '7.x-2.12',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_wysiwyg',
          ),
          'configure' => 'admin/config/media/wysiwyg-view-mode',
          'files' => 
          array (
            0 => 'media_wysiwyg_view_mode.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform',
            2 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media_internet' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'mediafield' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => '7226',
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'fivestar' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/fivestar/fivestar.module',
        'basename' => 'fivestar.module',
        'name' => 'fivestar',
        'info' => 
        array (
          'name' => 'Fivestar',
          'description' => 'Enables fivestar ratings on content, users, etc.',
          'package' => 'Voting',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'votingapi',
          ),
          'configure' => 'admin/config/content/fivestar',
          'files' => 
          array (
            0 => 'test/fivestar.base.test',
            1 => 'test/fivestar.field.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'fivestar',
          'datestamp' => '1395087839',
          'php' => '5.2.4',
        ),
        'schema_version' => '7208',
        'project' => 'fivestar',
        'version' => '7.x-2.1',
      ),
      'webform' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/webform.webformconditionals.inc',
            1 => 'includes/exporters/webform_exporter_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            4 => 'includes/exporters/webform_exporter.inc',
            5 => 'views/webform_handler_area_result_pager.inc',
            6 => 'views/webform_handler_field_form_body.inc',
            7 => 'views/webform_handler_field_is_draft.inc',
            8 => 'views/webform_handler_field_node_link_edit.inc',
            9 => 'views/webform_handler_field_node_link_results.inc',
            10 => 'views/webform_handler_field_submission_count.inc',
            11 => 'views/webform_handler_field_submission_data.inc',
            12 => 'views/webform_handler_field_submission_link.inc',
            13 => 'views/webform_handler_field_webform_status.inc',
            14 => 'views/webform_handler_filter_is_draft.inc',
            15 => 'views/webform_handler_filter_submission_data.inc',
            16 => 'views/webform_handler_filter_webform_status.inc',
            17 => 'views/webform_handler_numeric_data.inc',
            18 => 'views/webform_handler_relationship_submission_data.inc',
            19 => 'views/webform_plugin_row_submission_view.inc',
            20 => 'views/webform.views.inc',
            21 => 'tests/components.test',
            22 => 'tests/conditionals.test',
            23 => 'tests/permissions.test',
            24 => 'tests/submission.test',
            25 => 'tests/webform.test',
          ),
          'version' => '7.x-4.8',
          'project' => 'webform',
          'datestamp' => '1430334485',
        ),
        'schema_version' => '7429',
        'project' => 'webform',
        'version' => '7.x-4.8',
      ),
      'rules_admin' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'rules' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7214',
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup the Drupal database and files or migrate them to another environment.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/destinations.inc',
            1 => 'includes/profiles.inc',
            2 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-3.0',
          'project' => 'backup_migrate',
          'datestamp' => '1401209057',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'backup_migrate',
        'version' => '7.x-3.0',
      ),
      'file_entity' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.9)',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.0-beta1',
          'project' => 'file_entity',
          'datestamp' => '1412420930',
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'file_entity',
        'version' => '7.x-2.0-beta1',
      ),
      'uuid_services' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_services/uuid_services.module',
        'basename' => 'uuid_services.module',
        'name' => 'uuid_services',
        'info' => 
        array (
          'name' => 'UUID Services',
          'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
          'core' => '7.x',
          'package' => 'Services - resources',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'uuid',
            2 => 'entity',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'uuid_path' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_path/uuid_path.module',
        'basename' => 'uuid_path.module',
        'name' => 'uuid_path',
        'info' => 
        array (
          'name' => 'UUID Path',
          'description' => 'Provides export functionality for url aliases.',
          'core' => '7.x',
          'package' => 'UUID',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'uuid_services_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_services_example/uuid_services_example.module',
        'basename' => 'uuid_services_example.module',
        'name' => 'uuid_services_example',
        'info' => 
        array (
          'name' => 'UUID Services Example',
          'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'rest_server',
            1 => 'services',
            2 => 'uuid',
            3 => 'uuid_services',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'services:services:3',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'services_endpoint' => 
            array (
              0 => 'uuid_services_example',
            ),
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'uuid_default_entities_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_default_entities_example/uuid_default_entities_example.module',
        'basename' => 'uuid_default_entities_example.module',
        'name' => 'uuid_default_entities_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'features',
            2 => 'uuid',
          ),
          'description' => 'Example feature mainly used for testing.',
          'features' => 
          array (
            'uuid_entities' => 
            array (
              0 => 'deploy_example_plan',
            ),
          ),
          'name' => 'UUID default entities example',
          'package' => 'Features',
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid.module',
        'basename' => 'uuid.module',
        'name' => 'uuid',
        'info' => 
        array (
          'name' => 'Universally Unique ID',
          'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
          'core' => '7.x',
          'package' => 'UUID',
          'configure' => 'admin/config/system/uuid',
          'files' => 
          array (
            0 => 'uuid.test',
          ),
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'admin_devel' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'tb_megamenu' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/tb_megamenu/tb_megamenu.module',
        'basename' => 'tb_megamenu.module',
        'name' => 'tb_megamenu',
        'info' => 
        array (
          'name' => 'TB Mega Menu',
          'description' => 'Megamenu solutions for Drupal',
          'package' => 'tb_megamenu',
          'version' => '7.x-1.0-beta5',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tb_megamenu.functions.inc',
            1 => 'tb_megamenu.themes.inc',
            2 => 'tb_megamenu.ajax.inc',
            3 => 'tb_megamenu.admin.inc',
            4 => 'tb_megamenu.module',
          ),
          'configure' => 'admin/structure/tb-megamenu',
          'project' => 'tb_megamenu',
          'datestamp' => '1408100329',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'tb_megamenu',
        'version' => '7.x-1.0-beta5',
      ),
      'blockexport' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/blockexport/blockexport.module',
        'basename' => 'blockexport.module',
        'name' => 'blockexport',
        'info' => 
        array (
          'name' => 'Block Export',
          'description' => 'It will allow administrator to export all blocks as a single feature.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
          ),
          'version' => '7.x-1.0',
          'project' => 'blockexport',
          'datestamp' => '1343316154',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'blockexport',
        'version' => '7.x-1.0',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
        ),
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'bartik' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
        ),
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'stark' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
        ),
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.35',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
        ),
        'project' => 'drupal',
        'version' => '7.35',
      ),
      'rhythm_sub' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/themes/rhythm/rhythm_sub/rhythm_sub.info',
        'basename' => 'rhythm_sub.info',
        'name' => 'Rhythm Sub-Theme',
        'info' => 
        array (
          'name' => 'Rhythm Sub-Theme',
          'description' => 'Rhythm is Responsive Drupal 7 Theme.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'base theme' => 'rhythm',
          'regions' => 
          array (
            'top' => 'Top',
            'content_top' => 'Content Top',
            'content' => 'Content',
            'sidebar' => 'Sidebar',
            'content_full' => 'Content Full Width',
            'bottom' => 'Content Bottom',
            'footer' => 'Footer',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/custom.css',
            ),
          ),
          'features' => 
          array (
            0 => 'name',
            1 => 'logo',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
          ),
          'settings' => 
          array (
            'toggle_name' => '1',
            'toggle_logo' => '1',
            'toggle_slogan' => '1',
            'toggle_node_user_picture' => '1',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '1',
            'loader_image' => '1',
          ),
          'version' => '7.x-1.1',
          'project' => 'Rhythm',
        ),
        'owner' => '/data/disk/o1/static/krosae01/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'Rhythm',
        'version' => '7.x-1.1',
      ),
      'rhythm' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/themes/rhythm/rhythm.info',
        'basename' => 'rhythm.info',
        'name' => 'Rhythm',
        'info' => 
        array (
          'name' => 'Rhythm',
          'description' => 'Rhythm is Responsive Drupal 7 Theme.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'top' => 'Top',
            'content_top' => 'Content Top',
            'content' => 'Content',
            'sidebar' => 'Sidebar',
            'content_full' => 'Content Full Width',
            'bottom' => 'Content Bottom',
            'footer' => 'Footer',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/bootstrap.min.css',
              1 => 'css/style.css',
              2 => 'css/style-responsive.css',
              3 => 'css/animate.min.css',
              4 => 'css/vertical-rhythm.min.css',
              5 => 'css/owl.carousel.css',
              6 => 'css/magnific-popup.css',
              7 => 'css/drupal.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.easing.1.3.js',
            1 => 'js/bootstrap.min.js',
            2 => 'js/SmoothScroll.js',
            3 => 'js/jquery.scrollTo.min.js',
            4 => 'js/jquery.localScroll.min.js',
            5 => 'js/jquery.viewport.mini.js',
            6 => 'js/jquery.countTo.js',
            7 => 'js/jquery.appear.js',
            8 => 'js/jquery.sticky.js',
            9 => 'js/jquery.parallax-1.1.3.js',
            10 => 'js/jquery.fitvids.js',
            11 => 'js/owl.carousel.min.js',
            12 => 'js/isotope.pkgd.min.js',
            13 => 'js/imagesloaded.pkgd.min.js',
            14 => 'js/jquery.magnific-popup.min.js',
            15 => 'js/gmap3.min.js',
            16 => 'js/wow.min.js',
            17 => 'js/masonry.pkgd.min.js',
            18 => 'js/jquery.simple-text-rotator.min.js',
            19 => 'js/jquery.mb.YTPlayer.js',
            20 => 'js/all.js',
            21 => 'js/drupal.js',
          ),
          'features' => 
          array (
            0 => 'name',
            1 => 'logo',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
          ),
          'settings' => 
          array (
            'toggle_name' => '1',
            'toggle_logo' => '1',
            'toggle_slogan' => '1',
            'toggle_node_user_picture' => '1',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '1',
            'loader_image' => '1',
          ),
          'version' => '7.x-1.1',
          'project' => 'Rhythm',
        ),
        'owner' => '/data/disk/o1/static/krosae01/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'Rhythm',
        'version' => '7.x-1.1',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.35',
        'description' => 'This platform is running Drupal 7.35',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/data/disk/o1/static/krosae01/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'acquia',
        ),
        'version' => '7.35',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/data/disk/o1/static/krosae01/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.35',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1426707463',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.35',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'addressfield' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'addressfield.migrate.inc',
            1 => 'views/addressfield_views_handler_field_country.inc',
            2 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'addressfield',
          'datestamp' => '1429819382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'addressfield',
        'version' => '7.x-1.1',
      ),
      'node_export_dependency' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_dependency/node_export_dependency.module',
        'basename' => 'node_export_dependency.module',
        'name' => 'node_export_dependency',
        'info' => 
        array (
          'name' => 'Node export dependency (experimental)',
          'description' => 'Helps maintain relationships to dependent entities.  Intended to make Node export relation obsolete.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_features' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_features/node_export_features.module',
        'basename' => 'node_export_features.module',
        'name' => 'node_export_features',
        'info' => 
        array (
          'name' => 'Node export features',
          'description' => 'Adds Features support to Node export, so you can put your exports into Features modules.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
            2 => 'features',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_relation' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_relation/node_export_relation.module',
        'basename' => 'node_export_relation.module',
        'name' => 'node_export_relation',
        'info' => 
        array (
          'name' => 'Node export relation (deprecated)',
          'description' => 'Helps maintain relationships.  Supports node references, taxonomy, and organic groups.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_feeds' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/modules/node_export_feeds/node_export_feeds.module',
        'basename' => 'node_export_feeds.module',
        'name' => 'node_export_feeds',
        'info' => 
        array (
          'name' => 'Node export feeds',
          'description' => 'Node export feeds importer.  This is a more advanced importer than the one built into node export, but tricky to use.',
          'core' => '7.x',
          'package' => 'Node export',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'node_export',
          ),
          'files' => 
          array (
            0 => 'FeedsNodeExportParser.inc',
            1 => 'FeedsNodeExportProcessor.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/node_export/node_export.module',
        'basename' => 'node_export.module',
        'name' => 'node_export',
        'info' => 
        array (
          'name' => 'Node export',
          'description' => 'Allows users to export content and then import into another Drupal installation.',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'configure' => 'admin/config/content/node_export',
          'files' => 
          array (
            0 => 'views/views_handler_field_node_link_export.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'version' => '7.x-1.16',
          'project' => 'ckeditor',
          'datestamp' => '1413311935',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ckeditor',
        'version' => '7.x-1.16',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'term_depth' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'views_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.7',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.7',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1426696183',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'ctools',
        'version' => '7.x-1.7',
      ),
      'nikadevs_dev' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/_custom/nikadevs_dev/nikadevs_dev.module',
        'basename' => 'nikadevs_dev.module',
        'name' => 'nikadevs_dev',
        'info' => 
        array (
          'name' => 'NikaDevs Development',
          'description' => 'Functions for releasing themes',
          'package' => 'NikaDevs',
          'version' => '7.x - 0.1',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x - 0.1',
      ),
      'entity_token' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.6',
      ),
      'entity' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'entity',
        'version' => '7.x-1.6',
      ),
      'rhythm_shortcodes' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_shortcodes/rhythm_shortcodes.module',
        'basename' => 'rhythm_shortcodes.module',
        'name' => 'rhythm_shortcodes',
        'info' => 
        array (
          'name' => 'Rhythm Shortcodes',
          'description' => 'Shortcodes for Rhythm theme',
          'package' => 'NikaDevs',
          'version' => '7.x - 1.0',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x - 1.0',
      ),
      'rhythm_features' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_features/rhythm_features.module',
        'basename' => 'rhythm_features.module',
        'name' => 'rhythm_features',
        'info' => 
        array (
          'name' => 'Rhythm Features',
          'description' => 'Node types, views, image styles and other elements for Rhythm theme.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.1',
          'project' => 'rhythm_features',
          'dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'commerce_line_item',
            2 => 'ctools',
            3 => 'features',
            4 => 'image',
            5 => 'link',
            6 => 'media',
            7 => 'nikadevs_cms',
            8 => 'rhythm_cms',
            9 => 'shortcode',
            10 => 'taxonomy',
            11 => 'text',
            12 => 'views',
          ),
          'features' => 
          array (
            'ckeditor_profile' => 
            array (
              0 => 'Full',
            ),
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
              1 => 'comment_body',
              2 => 'field_blog_category',
              3 => 'field_description',
              4 => 'field_file_image_alt_text',
              5 => 'field_file_image_title_text',
              6 => 'field_gallery',
              7 => 'field_image',
              8 => 'field_images',
              9 => 'field_lead_text',
              10 => 'field_portfolio_category',
              11 => 'field_position',
              12 => 'field_project',
              13 => 'field_project_link',
              14 => 'field_second_title',
              15 => 'field_short_description',
              16 => 'field_social_links',
            ),
            'field_instance' => 
            array (
              0 => 'file-image-field_file_image_alt_text',
              1 => 'file-image-field_file_image_title_text',
              2 => 'node-gallery_item-field_gallery',
              3 => 'node-gallery_item-field_image',
              4 => 'node-nd_blog-body',
              5 => 'node-nd_blog-field_blog_category',
              6 => 'node-nd_blog-field_images',
              7 => 'node-nd_blog-field_lead_text',
              8 => 'node-nd_blog-field_second_title',
              9 => 'node-nd_page-body',
              10 => 'node-nd_person-body',
              11 => 'node-nd_person-field_image',
              12 => 'node-nd_person-field_position',
              13 => 'node-nd_person-field_social_links',
              14 => 'node-nd_portfolio-body',
              15 => 'node-nd_portfolio-field_category',
              16 => 'node-nd_portfolio-field_description',
              17 => 'node-nd_portfolio-field_images',
              18 => 'node-nd_portfolio-field_portfolio_category',
              19 => 'node-nd_portfolio-field_project',
              20 => 'node-nd_portfolio-field_project_link',
            ),
            'filter' => 
            array (
              0 => 'dynamic_shortcodes',
              1 => 'nd_ckeditor',
              2 => 'shortcodes',
            ),
            'image' => 
            array (
              0 => 'blog_1140x642',
              1 => 'blog_360x195',
              2 => 'blog_360xauto',
              3 => 'gallery_165x106',
              4 => 'gallery_263x169',
              5 => 'gallery_360x232',
              6 => 'gallery_555x357',
              7 => 'logo_autox67',
              8 => 'person_360x438',
              9 => 'portfolio_285x183',
              10 => 'portfolio_325xauto',
              11 => 'portfolio_378x243',
              12 => 'portfolio_570x367',
              13 => 'portfolio_650xauto',
              14 => 'portfolio_653x368',
              15 => 'portfolio_900xauto',
            ),
            'node' => 
            array (
              0 => 'gallery_item',
              1 => 'nd_blog',
              2 => 'nd_page',
              3 => 'nd_person',
              4 => 'nd_portfolio',
              5 => 'webform',
            ),
            'taxonomy' => 
            array (
              0 => 'blog_category',
              1 => 'category',
              2 => 'gallery',
              3 => 'portfolio_category',
              4 => 'project',
            ),
            'views_view' => 
            array (
              0 => 'blog_fullwidth',
              1 => 'blog_grid',
              2 => 'blog_masonry',
              3 => 'gallery',
              4 => 'last_posts',
              5 => 'manage_cms',
              6 => 'portfolio_boxed',
              7 => 'portfolio_parallax',
              8 => 'portfolio_promo',
              9 => 'products_comments',
              10 => 'related_projects',
              11 => 'shop_categories',
              12 => 'team',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'options' => 'options',
            ),
            'field_base' => 
            array (
              'field_category' => 'field_category',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_features',
        'version' => '7.x-1.1',
      ),
      'rhythm_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_content/rhythm_content.module',
        'basename' => 'rhythm_content.module',
        'name' => 'rhythm_content',
        'info' => 
        array (
          'name' => 'Rhythm Content',
          'description' => 'Content for Rhythm theme.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.1',
          'project' => 'rhythm_content',
          'dependencies' => 
          array (
            0 => 'node_export_features',
            1 => 'node',
            2 => 'node_export_features',
            3 => 'text',
          ),
          'features' => 
          array (
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'node_export_features' => 
            array (
              0 => '00a2dea4-c270-4eba-a4c6-2cc0d962dfb6',
              1 => '02dd6041-d4d5-41a3-a03d-ad2e17f504ea',
              2 => '031d4296-1dcf-419f-887f-9a042f74ac17',
              3 => '03a2dabb-fdf8-4de7-9509-67bf72d56721',
              4 => '03a638f2-bc4c-4653-a948-266d11ba855f',
              5 => '0509bd2c-6cfd-4d44-bf17-ad4ad412fcac',
              6 => '058faacf-e4e1-46fb-840c-66d59bd7e614',
              7 => '05e785f3-ea17-4146-a410-17d26051e1af',
              8 => '085916aa-fed5-4fe5-8a02-04644cff368a',
              9 => '0a205fa3-e043-4776-a1b5-c61d7c5e4990',
              10 => '0cdc7b97-a943-4493-a465-71dafe58ca29',
              11 => '0e3f7f28-02b6-477e-a4c2-4bd5b69978d9',
              12 => '11a89319-5f44-482e-a3ad-e6700cd3627e',
              13 => '1ac5b1e1-e257-4b38-846f-70e907239c6d',
              14 => '1d250aa0-e791-49af-8512-55c1342b04e6',
              15 => '1df45ff3-27c6-4a78-b63b-f83237bc0462',
              16 => '2012d228-62f5-481c-89f4-5eef049aec3c',
              17 => '21984847-ca5a-4ec2-a5aa-1064fc65333e',
              18 => '219e47e2-4a3d-44bf-96be-ff346e5a0b47',
              19 => '21c6aad3-77c1-4ff5-baa9-fb5c540fbf91',
              20 => '2441ddce-3881-4413-8f2a-f4d3ef0c4d3a',
              21 => '2532d3ef-f56f-402a-9abe-b49d73941a2f',
              22 => '26d90f62-6884-4bdf-9cec-290665c5a84d',
              23 => '27c8ec7c-52e2-4570-856b-b5ecace1ef97',
              24 => '2c011fd6-9032-4ec5-923b-c9289d2a2332',
              25 => '2cdbb84b-e54b-4baf-8e22-38a53d751245',
              26 => '2fd6e5b6-924e-40d2-a679-8a90c303c212',
              27 => '360e075f-b886-4010-a76f-a6326871c2a8',
              28 => '3a1e4d4b-01fc-4fd3-8c74-aaab4f00f7d5',
              29 => '3d8df4aa-ad9c-4bea-93fd-6de62bb99761',
              30 => '413059d3-e85e-4e6d-a489-d4209d65937d',
              31 => '4354489d-3182-440b-90ae-d33049b14f1b',
              32 => '45e0f222-9929-4d0b-9dca-6108231ea999',
              33 => '4849416e-5e51-4c3e-8968-4d96313c4805',
              34 => '4d3e434b-fadc-4b23-ac64-d2bd004f4a73',
              35 => '4dcec82b-e3e6-4140-9e11-1e8aa1fffb28',
              36 => '52116e6a-64cb-493b-a6f4-a886d3a254c7',
              37 => '590fd37d-07d8-44d4-8fc8-92f056962a55',
              38 => '5c3b91c6-2a84-4d52-9b8e-c320e7cfb6f7',
              39 => '5cf82817-9d71-41db-aeed-f265d6e2c810',
              40 => '60413bbf-2762-45a8-aee2-a9f1d57a3011',
              41 => '6a4a8bd6-ff57-4523-ab0d-91345154b0fb',
              42 => '6b9b70da-a234-46ab-9bdd-23ec85ac0006',
              43 => '6fc66d74-5b89-40c4-9dba-5a5feeb3c2db',
              44 => '70b4ef81-a68b-4c1c-8856-7551ca400e6c',
              45 => '7283917b-a7a3-4939-b15a-8d8a1f51ae7f',
              46 => '73b001be-bf5c-4e92-a4ad-79f1053f91c8',
              47 => '770eeaea-afbe-4e96-8edd-fbf333b639db',
              48 => '77290f23-a514-415f-b9cc-7d746ae7320a',
              49 => '7b8432d7-bc3e-406f-9689-085f5b836b6d',
              50 => '7b9a8f4f-aef2-4a27-b236-d0c82b27cf01',
              51 => '7b9bc46d-9c62-4c71-828e-cc14ee8ca633',
              52 => '7bd7fb43-805c-401f-882a-fa512cc272a7',
              53 => '7c3c484e-c6df-41be-afaa-7b06f7c157d4',
              54 => '7e71a5fd-bebc-4203-889d-58df907ae4ed',
              55 => '7ebcefa9-afbc-4a53-aff1-1d1a61974368',
              56 => '80391b63-b1ec-4add-b176-c84f38044403',
              57 => '81c019ef-4ce0-42ec-95e8-84a97d8a97f9',
              58 => '83eff5d3-057d-4c19-9500-2ee4b3f18f32',
              59 => '8d950bad-2711-4070-98f2-e0adc0ebaae5',
              60 => '8f72d3bf-93f1-4bac-b2f7-a9e7a706958c',
              61 => '952712c2-4c77-4cbc-b7fe-999a3f4ddf05',
              62 => '96131933-3248-4f25-9ab0-ca3144035f7f',
              63 => '961f8fcc-051f-4ac1-8031-4e1b5f070d2e',
              64 => '9716be13-86b3-4c03-a3d2-56704a8b0bdf',
              65 => '974e6794-075a-4c7a-a161-5523c35ec707',
              66 => '99115dd4-396a-4f25-9bf0-23f443c1b781',
              67 => 'a4253605-69da-4e9f-be8e-80b46ace40fd',
              68 => 'a4b0d079-fbd3-4954-9248-36f6b2ec4534',
              69 => 'a5ba8bd6-5b3d-44de-bd37-8c2f7d9fc41b',
              70 => 'a68caf67-0e73-4024-9789-68daf2f601f2',
              71 => 'a778aedf-6c55-42f1-917e-32678dd0ed3e',
              72 => 'a9aada27-0e45-4269-878c-6f4cf2fc524a',
              73 => 'abc8a66e-8bfb-4cf7-90c8-994cc90233d3',
              74 => 'ae173b7e-9c33-4501-ba1b-5956946ea31a',
              75 => 'b4c0d3cd-6af4-46b8-9fbb-290b802dfe00',
              76 => 'b5e57a87-f605-448e-a101-ded2a95f9cb1',
              77 => 'b630b861-fe59-4b66-82ce-136cc8372008',
              78 => 'b665c72d-b499-4a8b-9ac5-fd831b9880b6',
              79 => 'b6ff72cb-b965-4523-a478-1d343eb8fedf',
              80 => 'bb590df1-6c46-406a-8ab9-656a10001835',
              81 => 'bffc652e-ac6a-43c7-8d57-159089acd4a2',
              82 => 'c410dddb-2204-477c-aeba-c5de8e99a174',
              83 => 'c6a7a94d-66ed-48a1-8f82-4b191e7d28ce',
              84 => 'cfeca766-5db2-47cd-8e03-af897f4ff751',
              85 => 'd6b32770-e003-4e8c-9915-edd70b8909e2',
              86 => 'dc5cfd8a-5ffb-4aa9-a80f-e24c73f6b22f',
              87 => 'dd595e1d-3b8a-40d6-97bf-48b577ade41c',
              88 => 'e09a224a-0451-453f-b0c7-41aa9e245b96',
              89 => 'e5032da0-f869-4295-b01b-e815cc0001b4',
              90 => 'e9f616a7-8006-416b-a361-6cb9f17b6533',
              91 => 'ee69f089-a3b5-4261-9155-4d5ee768c171',
              92 => 'efade072-eb91-43e4-b8eb-7c42a0f68b34',
              93 => 'f135709d-b508-4809-bc48-80d1e316fdec',
              94 => 'f1c476ef-d422-4543-8fc9-9980ec23f0ea',
              95 => 'f27952c8-e674-41ef-adad-753e8b777756',
              96 => 'f4e9bd71-d2ab-4e6b-b376-26b03aba1aa3',
              97 => 'f7854d6c-001f-414c-96a9-f37db8bf25de',
              98 => 'f8a3f063-85d1-40a9-963b-86bf7feaa320',
            ),
          ),
          'features_exclude' => 
          array (
            'node' => 
            array (
              'nd_blog' => 'nd_blog',
              'gallery_item' => 'gallery_item',
              'nd_page' => 'nd_page',
              'nd_person' => 'nd_person',
              'nd_portfolio' => 'nd_portfolio',
              'nd_product_display' => 'nd_product_display',
              'webform' => 'webform',
            ),
            'dependencies' => 
            array (
              'commerce_cart' => 'commerce_cart',
              'commerce_product_reference' => 'commerce_product_reference',
              'features' => 'features',
              'fivestar' => 'fivestar',
              'image' => 'image',
              'link' => 'link',
              'media' => 'media',
              'options' => 'options',
              'rhythm_cms' => 'rhythm_cms',
              'taxonomy' => 'taxonomy',
            ),
            'field_base' => 
            array (
              'body' => 'body',
              'field_images' => 'field_images',
              'field_category' => 'field_category',
              'field_tags' => 'field_tags',
              'field_description' => 'field_description',
              'field_rating' => 'field_rating',
              'field_products' => 'field_products',
              'field_second_title' => 'field_second_title',
              'field_lead_text' => 'field_lead_text',
              'field_image' => 'field_image',
              'field_social_links' => 'field_social_links',
              'field_position' => 'field_position',
              'field_gallery' => 'field_gallery',
              'field_project_link' => 'field_project_link',
              'field_project' => 'field_project',
              'field_blog_category' => 'field_blog_category',
              'field_portfolio_category' => 'field_portfolio_category',
            ),
            'field_instance' => 
            array (
              'node-gallery_item-field_gallery' => 'node-gallery_item-field_gallery',
              'node-gallery_item-field_image' => 'node-gallery_item-field_image',
              'node-nd_blog-body' => 'node-nd_blog-body',
              'node-nd_blog-field_category' => 'node-nd_blog-field_category',
              'node-nd_blog-field_images' => 'node-nd_blog-field_images',
              'node-nd_blog-field_lead_text' => 'node-nd_blog-field_lead_text',
              'node-nd_blog-field_second_title' => 'node-nd_blog-field_second_title',
              'node-nd_page-body' => 'node-nd_page-body',
              'node-nd_person-body' => 'node-nd_person-body',
              'node-nd_person-field_image' => 'node-nd_person-field_image',
              'node-nd_person-field_position' => 'node-nd_person-field_position',
              'node-nd_person-field_social_links' => 'node-nd_person-field_social_links',
              'node-nd_portfolio-body' => 'node-nd_portfolio-body',
              'node-nd_portfolio-field_category' => 'node-nd_portfolio-field_category',
              'node-nd_portfolio-field_description' => 'node-nd_portfolio-field_description',
              'node-nd_portfolio-field_images' => 'node-nd_portfolio-field_images',
              'node-nd_portfolio-field_project' => 'node-nd_portfolio-field_project',
              'node-nd_portfolio-field_project_link' => 'node-nd_portfolio-field_project_link',
              'node-nd_product_display-field_category' => 'node-nd_product_display-field_category',
              'node-nd_product_display-field_products' => 'node-nd_product_display-field_products',
              'node-nd_product_display-field_rating' => 'node-nd_product_display-field_rating',
              'node-nd_product_display-field_tags' => 'node-nd_product_display-field_tags',
              'node-nd_blog-field_blog_category' => 'node-nd_blog-field_blog_category',
              'node-nd_portfolio-field_portfolio_category' => 'node-nd_portfolio-field_portfolio_category',
            ),
            'taxonomy' => 
            array (
              'category' => 'category',
              'gallery' => 'gallery',
              'project' => 'project',
              'tags' => 'tags',
              'blog_category' => 'blog_category',
              'portfolio_category' => 'portfolio_category',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_content',
        'version' => '7.x-1.1',
      ),
      'rhythm_commerce' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_commerce/rhythm_commerce.module',
        'basename' => 'rhythm_commerce.module',
        'name' => 'rhythm_commerce',
        'info' => 
        array (
          'name' => 'Rhythm Commerce',
          'description' => 'Node types, views, image styles and other elements for Rhythm Commerce.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.1',
          'project' => 'rhythm_commerce',
          'dependencies' => 
          array (
            0 => 'commerce_cart',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'commerce_product_ui',
            4 => 'ctools',
            5 => 'features',
            6 => 'fivestar',
            7 => 'image',
            8 => 'options',
            9 => 'properties',
            10 => 'taxonomy',
            11 => 'text',
            12 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_category',
              1 => 'field_old_price',
              2 => 'field_parameters',
              3 => 'field_products',
              4 => 'field_rating',
              5 => 'field_right_side_description',
              6 => 'field_sale_text',
              7 => 'field_tags',
            ),
            'field_instance' => 
            array (
              0 => 'node-nd_product_display-field_category',
              1 => 'node-nd_product_display-field_products',
              2 => 'node-nd_product_display-field_rating',
              3 => 'node-nd_product_display-field_tags',
            ),
            'image' => 
            array (
              0 => 'product_263x335',
              1 => 'product_70x70',
              2 => 'product_main_360x459',
              3 => 'product_small_68x86',
            ),
            'node' => 
            array (
              0 => 'nd_product_display',
            ),
            'taxonomy' => 
            array (
              0 => 'tags',
            ),
            'views_view' => 
            array (
              0 => 'products_best_sellers',
              1 => 'products_tags',
              2 => 'related_products',
              3 => 'shop_2_columns',
            ),
          ),
          'features_exclude' => 
          array (
            'taxonomy' => 
            array (
              'category' => 'category',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_commerce',
        'version' => '7.x-1.1',
      ),
      'rhythm_block' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_block/rhythm_block.module',
        'basename' => 'rhythm_block.module',
        'name' => 'rhythm_block',
        'info' => 
        array (
          'name' => 'Rhythm Block',
          'description' => 'Blocks for Rhythm theme.',
          'core' => '7.x',
          'package' => 'NikaDevs',
          'version' => '7.x-1.0',
          'project' => 'rhythm_block',
          'dependencies' => 
          array (
            0 => 'blockexport',
          ),
          'features' => 
          array (
            'blockexport_settings' => 
            array (
              0 => 'block_settings',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rhythm_block',
        'version' => '7.x-1.0',
      ),
      'rhythm_cms' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rhythm_cms/rhythm_cms.module',
        'basename' => 'rhythm_cms.module',
        'name' => 'rhythm_cms',
        'info' => 
        array (
          'name' => 'Rhythm theme module',
          'description' => 'Functions for Rhythm theme',
          'package' => 'NikaDevs',
          'version' => '7.x - 1.0',
          'core' => '7.x',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => '7.x - 1.0',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'jquery_update' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.5',
          'project' => 'jquery_update',
          'datestamp' => '1422221882',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.5',
      ),
      'libraries' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'token',
          'datestamp' => '1425149060',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.6',
      ),
      'features' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.5',
          'project' => 'features',
          'datestamp' => '1428944073',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.5',
      ),
      'nd_visualshortcodes' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/nikadevs_cms/modules/nd_visualshortcodes/nd_visualshortcodes.module',
        'basename' => 'nd_visualshortcodes.module',
        'name' => 'nd_visualshortcodes',
        'info' => 
        array (
          'name' => 'NikaDevs Visual Shortcodes',
          'description' => 'Visual Shortcodes Editor',
          'package' => 'NikaDevs',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'shortcode',
          ),
          'configure' => 'admin/config/content/nd_visualshortcodes',
          'version' => '7.x-1.0',
          'project' => 'NikaDevs',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'NikaDevs',
        'version' => '7.x-1.0',
      ),
      'nikadevs_cms' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/nikadevs_cms/nikadevs_cms.module',
        'basename' => 'nikadevs_cms.module',
        'name' => 'nikadevs_cms',
        'info' => 
        array (
          'name' => 'NikaDevs Main Functions',
          'description' => 'All required functions for NikaDevs themes.',
          'package' => 'NikaDevs',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'shortcode',
          ),
          'version' => '7.x-1.0',
          'project' => 'NikaDevs',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'NikaDevs',
        'version' => '7.x-1.0',
      ),
      'commerce_payment_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/payment/modules/commerce_payment_example.module',
        'basename' => 'commerce_payment_example.module',
        'name' => 'commerce_payment_example',
        'info' => 
        array (
          'name' => 'Payment Method Example',
          'description' => 'Provides an example payment method for testing and development.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_payment' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/payment/commerce_payment.module',
        'basename' => 'commerce_payment.module',
        'name' => 'commerce_payment',
        'info' => 
        array (
          'name' => 'Payment',
          'description' => 'Implement core payment features for Drupal commerce.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_order',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment.rules.inc',
            1 => 'includes/commerce_payment_transaction.controller.inc',
            2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
            3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
            4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
            5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
            6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
            7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
            8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
            9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
            10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
            11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
            12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
            13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
            14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
            15 => 'tests/commerce_payment.rules.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_payment_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/payment/commerce_payment_ui.module',
        'basename' => 'commerce_payment_ui.module',
        'name' => 'commerce_payment_ui',
        'info' => 
        array (
          'name' => 'Payment UI',
          'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_order',
            3 => 'commerce_order_ui',
            4 => 'commerce_payment',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/payment-methods',
          'files' => 
          array (
            0 => 'tests/commerce_payment_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_cart' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/cart/commerce_cart.module',
        'basename' => 'commerce_cart.module',
        'name' => 'commerce_cart',
        'info' => 
        array (
          'name' => 'Cart',
          'description' => 'Implements the shopping cart system and add to cart features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_checkout',
            2 => 'commerce_line_item',
            3 => 'commerce_order',
            4 => 'commerce_product',
            5 => 'commerce_product_pricing',
            6 => 'commerce_product_reference',
            7 => 'entity',
            8 => 'rules',
            9 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
            1 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
            2 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
            3 => 'tests/commerce_cart.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_customer' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/customer/commerce_customer.module',
        'basename' => 'commerce_customer.module',
        'name' => 'commerce_customer',
        'info' => 
        array (
          'name' => 'Customer',
          'description' => 'Defines the Customer entity with Address Field integration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'commerce',
            2 => 'entity',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_customer_profile.controller.inc',
            1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
            3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
            4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
            5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
            6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
            7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_customer_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/customer/commerce_customer_ui.module',
        'basename' => 'commerce_customer_ui.module',
        'name' => 'commerce_customer_ui',
        'info' => 
        array (
          'name' => 'Customer UI',
          'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_customer',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/customer-profiles/types',
          'files' => 
          array (
            0 => 'tests/commerce_customer_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_price' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/price/commerce_price.module',
        'basename' => 'commerce_price.module',
        'name' => 'commerce_price',
        'info' => 
        array (
          'name' => 'Price',
          'description' => 'Defines the price field and a price alteration system.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_price.rules.inc',
            1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
            2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product/commerce_product_ui.module',
        'basename' => 'commerce_product_ui.module',
        'name' => 'commerce_product_ui',
        'info' => 
        array (
          'name' => 'Product UI',
          'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_product',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/products/types',
          'files' => 
          array (
            0 => 'tests/commerce_product_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product/commerce_product.module',
        'basename' => 'commerce_product.module',
        'name' => 'commerce_product',
        'info' => 
        array (
          'name' => 'Product',
          'description' => 'Defines the Product entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_product.controller.inc',
            1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
            3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
            4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
            5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
            6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
            7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
            8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
            9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
            10 => 'includes/commerce_product.translation_handler.inc',
            11 => 'tests/commerce_product.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_order' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/order/commerce_order.module',
        'basename' => 'commerce_order.module',
        'name' => 'commerce_order',
        'info' => 
        array (
          'name' => 'Order',
          'description' => 'Defines the Order entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_customer',
            2 => 'commerce_line_item',
            3 => 'commerce_price',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_order.controller.inc',
            1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
            3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
            4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
            5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
            6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
            7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
            8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
            9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
            10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
            11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
            12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
            13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
            14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
            15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
            16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
            17 => 'tests/commerce_order.rules.test',
            18 => 'tests/commerce_order.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7109',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_order_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/order/commerce_order_ui.module',
        'basename' => 'commerce_order_ui.module',
        'name' => 'commerce_order_ui',
        'info' => 
        array (
          'name' => 'Order UI',
          'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'commerce_order',
            5 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/order',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
            1 => 'tests/commerce_order_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_reference' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product_reference/commerce_product_reference.module',
        'basename' => 'commerce_product_reference.module',
        'name' => 'commerce_product_reference',
        'info' => 
        array (
          'name' => 'Product Reference',
          'description' => 'Defines a product reference field and default display formatters.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product',
            4 => 'entity',
            5 => 'options',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
            1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
            2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
            3 => 'tests/commerce_product_reference.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_tax' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/tax/commerce_tax.module',
        'basename' => 'commerce_tax.module',
        'name' => 'commerce_tax',
        'info' => 
        array (
          'name' => 'Tax',
          'description' => 'Define tax rates and configure tax rules for applicability and display.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product_pricing',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_tax_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/tax/commerce_tax_ui.module',
        'basename' => 'commerce_tax_ui.module',
        'name' => 'commerce_tax_ui',
        'info' => 
        array (
          'name' => 'Tax UI',
          'description' => 'Provides a UI for creating simple tax types and rates.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_tax',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/taxes',
          'files' => 
          array (
            0 => 'tests/commerce_tax_ui.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_pricing' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product_pricing/commerce_product_pricing.module',
        'basename' => 'commerce_product_pricing.module',
        'name' => 'commerce_product_pricing',
        'info' => 
        array (
          'name' => 'Product Pricing',
          'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_product_pricing_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
        'basename' => 'commerce_product_pricing_ui.module',
        'name' => 'commerce_product_pricing_ui',
        'info' => 
        array (
          'name' => 'Product Pricing UI',
          'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
            5 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/product-pricing',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_checkout' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/checkout/commerce_checkout.module',
        'basename' => 'commerce_checkout.module',
        'name' => 'commerce_checkout',
        'info' => 
        array (
          'name' => 'Checkout',
          'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_order',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/checkout',
          'files' => 
          array (
            0 => 'tests/commerce_checkout.test',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_line_item' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/line_item/commerce_line_item.module',
        'basename' => 'commerce_line_item.module',
        'name' => 'commerce_line_item',
        'info' => 
        array (
          'name' => 'Line Item',
          'description' => 'Defines the Line Item entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_line_item.controller.inc',
            1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
            2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
            3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
            4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
            5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
            6 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
            7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_line_item_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/modules/line_item/commerce_line_item_ui.module',
        'basename' => 'commerce_line_item_ui.module',
        'name' => 'commerce_line_item_ui',
        'info' => 
        array (
          'name' => 'Line Item UI',
          'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/line-items',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/commerce.module',
        'basename' => 'commerce.module',
        'name' => 'commerce',
        'info' => 
        array (
          'name' => 'Commerce',
          'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'system',
            1 => 'entity',
            2 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_base.test',
            1 => 'includes/commerce.controller.inc',
          ),
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'commerce_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/commerce/commerce_ui.module',
        'basename' => 'commerce_ui.module',
        'name' => 'commerce_ui',
        'info' => 
        array (
          'name' => 'Commerce UI',
          'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'commerce',
          'datestamp' => '1421426596',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'commerce',
        'version' => '7.x-1.11',
      ),
      'retina_images' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/retina_images/retina_images.module',
        'basename' => 'retina_images.module',
        'name' => 'retina_images',
        'info' => 
        array (
          'name' => 'Retina Images',
          'description' => 'Provide an image effect to output images in high resolution format for high resolution displays.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'retina_images',
          'datestamp' => '1365529216',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'retina_images',
        'version' => '7.x-1.0-beta4',
      ),
      'views_export' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            92 => 'modules/field/views_handler_argument_field_list_string.inc',
            93 => 'modules/field/views_handler_filter_field_list.inc',
            94 => 'modules/filter/views_handler_field_filter_format_name.inc',
            95 => 'modules/locale/views_handler_field_node_language.inc',
            96 => 'modules/locale/views_handler_filter_node_language.inc',
            97 => 'modules/locale/views_handler_argument_locale_group.inc',
            98 => 'modules/locale/views_handler_argument_locale_language.inc',
            99 => 'modules/locale/views_handler_field_locale_group.inc',
            100 => 'modules/locale/views_handler_field_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            102 => 'modules/locale/views_handler_filter_locale_group.inc',
            103 => 'modules/locale/views_handler_filter_locale_language.inc',
            104 => 'modules/locale/views_handler_filter_locale_version.inc',
            105 => 'modules/node/views_handler_argument_dates_various.inc',
            106 => 'modules/node/views_handler_argument_node_language.inc',
            107 => 'modules/node/views_handler_argument_node_nid.inc',
            108 => 'modules/node/views_handler_argument_node_type.inc',
            109 => 'modules/node/views_handler_argument_node_vid.inc',
            110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_field_node.inc',
            113 => 'modules/node/views_handler_field_node_link.inc',
            114 => 'modules/node/views_handler_field_node_link_delete.inc',
            115 => 'modules/node/views_handler_field_node_link_edit.inc',
            116 => 'modules/node/views_handler_field_node_revision.inc',
            117 => 'modules/node/views_handler_field_node_revision_link.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            120 => 'modules/node/views_handler_field_node_path.inc',
            121 => 'modules/node/views_handler_field_node_type.inc',
            122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            123 => 'modules/node/views_handler_filter_node_access.inc',
            124 => 'modules/node/views_handler_filter_node_status.inc',
            125 => 'modules/node/views_handler_filter_node_type.inc',
            126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            127 => 'modules/node/views_plugin_argument_default_node.inc',
            128 => 'modules/node/views_plugin_argument_validate_node.inc',
            129 => 'modules/node/views_plugin_row_node_rss.inc',
            130 => 'modules/node/views_plugin_row_node_view.inc',
            131 => 'modules/profile/views_handler_field_profile_date.inc',
            132 => 'modules/profile/views_handler_field_profile_list.inc',
            133 => 'modules/profile/views_handler_filter_profile_selection.inc',
            134 => 'modules/search/views_handler_argument_search.inc',
            135 => 'modules/search/views_handler_field_search_score.inc',
            136 => 'modules/search/views_handler_filter_search.inc',
            137 => 'modules/search/views_handler_sort_search_score.inc',
            138 => 'modules/search/views_plugin_row_search_view.inc',
            139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            140 => 'modules/system/views_handler_argument_file_fid.inc',
            141 => 'modules/system/views_handler_field_file.inc',
            142 => 'modules/system/views_handler_field_file_extension.inc',
            143 => 'modules/system/views_handler_field_file_filemime.inc',
            144 => 'modules/system/views_handler_field_file_uri.inc',
            145 => 'modules/system/views_handler_field_file_status.inc',
            146 => 'modules/system/views_handler_filter_file_status.inc',
            147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            166 => 'modules/system/views_handler_filter_system_type.inc',
            167 => 'modules/translation/views_handler_argument_node_tnid.inc',
            168 => 'modules/translation/views_handler_field_node_link_translate.inc',
            169 => 'modules/translation/views_handler_field_node_translation_link.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid.inc',
            171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            172 => 'modules/translation/views_handler_relationship_translation.inc',
            173 => 'modules/user/views_handler_argument_user_uid.inc',
            174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            175 => 'modules/user/views_handler_field_user.inc',
            176 => 'modules/user/views_handler_field_user_language.inc',
            177 => 'modules/user/views_handler_field_user_link.inc',
            178 => 'modules/user/views_handler_field_user_link_cancel.inc',
            179 => 'modules/user/views_handler_field_user_link_edit.inc',
            180 => 'modules/user/views_handler_field_user_mail.inc',
            181 => 'modules/user/views_handler_field_user_name.inc',
            182 => 'modules/user/views_handler_field_user_permissions.inc',
            183 => 'modules/user/views_handler_field_user_picture.inc',
            184 => 'modules/user/views_handler_field_user_roles.inc',
            185 => 'modules/user/views_handler_filter_user_current.inc',
            186 => 'modules/user/views_handler_filter_user_name.inc',
            187 => 'modules/user/views_handler_filter_user_permissions.inc',
            188 => 'modules/user/views_handler_filter_user_roles.inc',
            189 => 'modules/user/views_plugin_argument_default_current_user.inc',
            190 => 'modules/user/views_plugin_argument_default_user.inc',
            191 => 'modules/user/views_plugin_argument_validate_user.inc',
            192 => 'modules/user/views_plugin_row_user_view.inc',
            193 => 'plugins/views_plugin_access.inc',
            194 => 'plugins/views_plugin_access_none.inc',
            195 => 'plugins/views_plugin_access_perm.inc',
            196 => 'plugins/views_plugin_access_role.inc',
            197 => 'plugins/views_plugin_argument_default.inc',
            198 => 'plugins/views_plugin_argument_default_php.inc',
            199 => 'plugins/views_plugin_argument_default_fixed.inc',
            200 => 'plugins/views_plugin_argument_default_raw.inc',
            201 => 'plugins/views_plugin_argument_validate.inc',
            202 => 'plugins/views_plugin_argument_validate_numeric.inc',
            203 => 'plugins/views_plugin_argument_validate_php.inc',
            204 => 'plugins/views_plugin_cache.inc',
            205 => 'plugins/views_plugin_cache_none.inc',
            206 => 'plugins/views_plugin_cache_time.inc',
            207 => 'plugins/views_plugin_display.inc',
            208 => 'plugins/views_plugin_display_attachment.inc',
            209 => 'plugins/views_plugin_display_block.inc',
            210 => 'plugins/views_plugin_display_default.inc',
            211 => 'plugins/views_plugin_display_embed.inc',
            212 => 'plugins/views_plugin_display_extender.inc',
            213 => 'plugins/views_plugin_display_feed.inc',
            214 => 'plugins/views_plugin_display_page.inc',
            215 => 'plugins/views_plugin_exposed_form_basic.inc',
            216 => 'plugins/views_plugin_exposed_form.inc',
            217 => 'plugins/views_plugin_exposed_form_input_required.inc',
            218 => 'plugins/views_plugin_localization_core.inc',
            219 => 'plugins/views_plugin_localization.inc',
            220 => 'plugins/views_plugin_localization_none.inc',
            221 => 'plugins/views_plugin_pager.inc',
            222 => 'plugins/views_plugin_pager_full.inc',
            223 => 'plugins/views_plugin_pager_mini.inc',
            224 => 'plugins/views_plugin_pager_none.inc',
            225 => 'plugins/views_plugin_pager_some.inc',
            226 => 'plugins/views_plugin_query.inc',
            227 => 'plugins/views_plugin_query_default.inc',
            228 => 'plugins/views_plugin_row.inc',
            229 => 'plugins/views_plugin_row_fields.inc',
            230 => 'plugins/views_plugin_row_rss_fields.inc',
            231 => 'plugins/views_plugin_style.inc',
            232 => 'plugins/views_plugin_style_default.inc',
            233 => 'plugins/views_plugin_style_grid.inc',
            234 => 'plugins/views_plugin_style_list.inc',
            235 => 'plugins/views_plugin_style_jump_menu.inc',
            236 => 'plugins/views_plugin_style_mapping.inc',
            237 => 'plugins/views_plugin_style_rss.inc',
            238 => 'plugins/views_plugin_style_summary.inc',
            239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            240 => 'plugins/views_plugin_style_summary_unformatted.inc',
            241 => 'plugins/views_plugin_style_table.inc',
            242 => 'tests/handlers/views_handlers.test',
            243 => 'tests/handlers/views_handler_area_text.test',
            244 => 'tests/handlers/views_handler_argument_null.test',
            245 => 'tests/handlers/views_handler_argument_string.test',
            246 => 'tests/handlers/views_handler_field.test',
            247 => 'tests/handlers/views_handler_field_boolean.test',
            248 => 'tests/handlers/views_handler_field_custom.test',
            249 => 'tests/handlers/views_handler_field_counter.test',
            250 => 'tests/handlers/views_handler_field_date.test',
            251 => 'tests/handlers/views_handler_field_file_extension.test',
            252 => 'tests/handlers/views_handler_field_file_size.test',
            253 => 'tests/handlers/views_handler_field_math.test',
            254 => 'tests/handlers/views_handler_field_url.test',
            255 => 'tests/handlers/views_handler_field_xss.test',
            256 => 'tests/handlers/views_handler_filter_combine.test',
            257 => 'tests/handlers/views_handler_filter_date.test',
            258 => 'tests/handlers/views_handler_filter_equality.test',
            259 => 'tests/handlers/views_handler_filter_in_operator.test',
            260 => 'tests/handlers/views_handler_filter_numeric.test',
            261 => 'tests/handlers/views_handler_filter_string.test',
            262 => 'tests/handlers/views_handler_sort_random.test',
            263 => 'tests/handlers/views_handler_sort_date.test',
            264 => 'tests/handlers/views_handler_sort.test',
            265 => 'tests/test_handlers/views_test_area_access.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            269 => 'tests/plugins/views_plugin_display.test',
            270 => 'tests/styles/views_plugin_style_jump_menu.test',
            271 => 'tests/styles/views_plugin_style.test',
            272 => 'tests/styles/views_plugin_style_base.test',
            273 => 'tests/styles/views_plugin_style_mapping.test',
            274 => 'tests/styles/views_plugin_style_unformatted.test',
            275 => 'tests/views_access.test',
            276 => 'tests/views_analyze.test',
            277 => 'tests/views_basic.test',
            278 => 'tests/views_argument_default.test',
            279 => 'tests/views_argument_validator.test',
            280 => 'tests/views_exposed_form.test',
            281 => 'tests/field/views_fieldapi.test',
            282 => 'tests/views_glossary.test',
            283 => 'tests/views_groupby.test',
            284 => 'tests/views_handlers.test',
            285 => 'tests/views_module.test',
            286 => 'tests/views_pager.test',
            287 => 'tests/views_plugin_localization_test.inc',
            288 => 'tests/views_translatable.test',
            289 => 'tests/views_query.test',
            290 => 'tests/views_upgrade.test',
            291 => 'tests/views_test.views_default.inc',
            292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            294 => 'tests/node/views_node_revision_relations.test',
            295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            296 => 'tests/user/views_handler_field_user_name.test',
            297 => 'tests/user/views_user_argument_default.test',
            298 => 'tests/user/views_user_argument_validate.test',
            299 => 'tests/user/views_user.test',
            300 => 'tests/views_cache.test',
            301 => 'tests/views_view.test',
            302 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'link' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.migrate.inc',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'link',
          'datestamp' => '1413924830',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.3',
      ),
      'module_filter' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0',
          'project' => 'module_filter',
          'datestamp' => '1424631189',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'module_filter',
        'version' => '7.x-2.0',
      ),
      'shortcode_embed_content' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/shortcode/shortcode_embed_content/shortcode_embed_content.module',
        'basename' => 'shortcode_embed_content.module',
        'name' => 'shortcode_embed_content',
        'info' => 
        array (
          'name' => 'Shortcode Embed Content Tag',
          'description' => 'Provides a shortcode tag for embedding a node content into text.',
          'package' => 'Shortcode',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'shortcode',
          ),
          'version' => '7.x-2.21',
          'project' => 'shortcode',
          'datestamp' => '1429272782',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'shortcode',
        'version' => '7.x-2.21',
      ),
      'shortcode_basic_tags' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/shortcode/shortcode_basic_tags/shortcode_basic_tags.module',
        'basename' => 'shortcode_basic_tags.module',
        'name' => 'shortcode_basic_tags',
        'info' => 
        array (
          'name' => 'Shortcode Basic Tags',
          'description' => 'Provides basic shortcode tags like highlight, dropcap, etc.',
          'package' => 'Shortcode',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'shortcode',
          ),
          'version' => '7.x-2.21',
          'project' => 'shortcode',
          'datestamp' => '1429272782',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'shortcode',
        'version' => '7.x-2.21',
      ),
      'shortcode' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/shortcode/shortcode.module',
        'basename' => 'shortcode.module',
        'name' => 'shortcode',
        'info' => 
        array (
          'name' => 'Shortcode',
          'description' => 'Provides shortcodes filter framework and API (like WP shortcodes)',
          'package' => 'Shortcode',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
          'version' => '7.x-2.21',
          'project' => 'shortcode',
          'datestamp' => '1429272782',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'shortcode',
        'version' => '7.x-2.21',
      ),
      'properties_compare' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_compare/properties_compare.module',
        'basename' => 'properties_compare.module',
        'name' => 'properties_compare',
        'info' => 
        array (
          'name' => 'Dynamic Properties Comparison',
          'description' => 'Allows to compare content.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_compare.test',
          ),
          'dependencies' => 
          array (
            0 => 'properties',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties_generate' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_generate/properties_generate.module',
        'basename' => 'properties_generate.module',
        'name' => 'properties_generate',
        'info' => 
        array (
          'name' => 'Dynamic Properties Generation',
          'description' => 'Generate a random amount of categories and attributes.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_generate.module',
          ),
          'dependencies' => 
          array (
            0 => 'properties',
            1 => 'properties_sql',
            2 => 'devel_generate',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties_sql' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_sql/properties_sql.module',
        'basename' => 'properties_sql.module',
        'name' => 'properties_sql',
        'info' => 
        array (
          'name' => 'Dynamic Properties SQL',
          'description' => 'This module implements the attribute and category API with a SQL backend.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_sql.module',
            1 => 'properties_sql.install',
            2 => 'properties_sql.test',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties_template' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties_template/properties_template.module',
        'basename' => 'properties_template.module',
        'name' => 'properties_template',
        'info' => 
        array (
          'name' => 'Dynamic Properties Template',
          'description' => 'This module implements the template functionality for properties.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties_template.module',
            1 => 'properties_template.admin.inc',
            2 => 'properties_template.test',
          ),
          'dependencies' => 
          array (
            0 => 'properties',
          ),
          'configure' => 'admin/config/content/properties/templates',
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'properties' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/properties/properties.module',
        'basename' => 'properties.module',
        'name' => 'properties',
        'info' => 
        array (
          'name' => 'Dynamic Properties',
          'description' => 'Provides a dynamic property field that can contain an unlimited number of attribute value pairs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'properties.module',
            1 => 'properties.test',
          ),
          'dependencies' => 
          array (
            0 => 'properties_sql',
          ),
          'configure' => 'admin/config/content/properties',
          'version' => '7.x-1.0-alpha1',
          'project' => 'properties',
          'datestamp' => '1293121027',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'properties',
        'version' => '7.x-1.0-alpha1',
      ),
      'votingapi' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/votingapi/votingapi.module',
        'basename' => 'votingapi.module',
        'name' => 'votingapi',
        'info' => 
        array (
          'name' => 'Voting API',
          'description' => 'Provides a shared voting API for other modules.',
          'package' => 'Voting',
          'core' => '7.x',
          'configure' => 'admin/config/search/votingapi',
          'files' => 
          array (
            0 => 'tests/votingapi.test',
            1 => 'views/votingapi_views_handler_field_value.inc',
            2 => 'views/votingapi_views_handler_sort_nullable.inc',
            3 => 'views/votingapi_views_handler_relationship.inc',
          ),
          'version' => '7.x-2.12',
          'project' => 'votingapi',
          'datestamp' => '1407995929',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'votingapi',
        'version' => '7.x-2.12',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_wysiwyg',
          ),
          'configure' => 'admin/config/media/wysiwyg-view-mode',
          'files' => 
          array (
            0 => 'media_wysiwyg_view_mode.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform',
            2 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media_internet' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'mediafield' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'media' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.0-alpha4',
          'project' => 'media',
          'datestamp' => '1412422430',
          'php' => '5.2.4',
        ),
        'schema_version' => '7226',
        'project' => 'media',
        'version' => '7.x-2.0-alpha4',
      ),
      'fivestar' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/fivestar/fivestar.module',
        'basename' => 'fivestar.module',
        'name' => 'fivestar',
        'info' => 
        array (
          'name' => 'Fivestar',
          'description' => 'Enables fivestar ratings on content, users, etc.',
          'package' => 'Voting',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'votingapi',
          ),
          'configure' => 'admin/config/content/fivestar',
          'files' => 
          array (
            0 => 'test/fivestar.base.test',
            1 => 'test/fivestar.field.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'fivestar',
          'datestamp' => '1395087839',
          'php' => '5.2.4',
        ),
        'schema_version' => '7208',
        'project' => 'fivestar',
        'version' => '7.x-2.1',
      ),
      'webform' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/webform.webformconditionals.inc',
            1 => 'includes/exporters/webform_exporter_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            4 => 'includes/exporters/webform_exporter.inc',
            5 => 'views/webform_handler_area_result_pager.inc',
            6 => 'views/webform_handler_field_form_body.inc',
            7 => 'views/webform_handler_field_is_draft.inc',
            8 => 'views/webform_handler_field_node_link_edit.inc',
            9 => 'views/webform_handler_field_node_link_results.inc',
            10 => 'views/webform_handler_field_submission_count.inc',
            11 => 'views/webform_handler_field_submission_data.inc',
            12 => 'views/webform_handler_field_submission_link.inc',
            13 => 'views/webform_handler_field_webform_status.inc',
            14 => 'views/webform_handler_filter_is_draft.inc',
            15 => 'views/webform_handler_filter_submission_data.inc',
            16 => 'views/webform_handler_filter_webform_status.inc',
            17 => 'views/webform_handler_numeric_data.inc',
            18 => 'views/webform_handler_relationship_submission_data.inc',
            19 => 'views/webform_plugin_row_submission_view.inc',
            20 => 'views/webform.views.inc',
            21 => 'tests/components.test',
            22 => 'tests/conditionals.test',
            23 => 'tests/permissions.test',
            24 => 'tests/submission.test',
            25 => 'tests/webform.test',
          ),
          'version' => '7.x-4.8',
          'project' => 'webform',
          'datestamp' => '1430334485',
        ),
        'schema_version' => '7429',
        'project' => 'webform',
        'version' => '7.x-4.8',
      ),
      'rules_admin' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'rules' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.9',
          'project' => 'rules',
          'datestamp' => '1426527210',
          'php' => '5.2.4',
        ),
        'schema_version' => '7214',
        'project' => 'rules',
        'version' => '7.x-2.9',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup the Drupal database and files or migrate them to another environment.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/destinations.inc',
            1 => 'includes/profiles.inc',
            2 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-3.0',
          'project' => 'backup_migrate',
          'datestamp' => '1401209057',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'backup_migrate',
        'version' => '7.x-3.0',
      ),
      'file_entity' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.9)',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.0-beta1',
          'project' => 'file_entity',
          'datestamp' => '1412420930',
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'file_entity',
        'version' => '7.x-2.0-beta1',
      ),
      'uuid_services' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_services/uuid_services.module',
        'basename' => 'uuid_services.module',
        'name' => 'uuid_services',
        'info' => 
        array (
          'name' => 'UUID Services',
          'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
          'core' => '7.x',
          'package' => 'Services - resources',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'uuid',
            2 => 'entity',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'uuid_path' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_path/uuid_path.module',
        'basename' => 'uuid_path.module',
        'name' => 'uuid_path',
        'info' => 
        array (
          'name' => 'UUID Path',
          'description' => 'Provides export functionality for url aliases.',
          'core' => '7.x',
          'package' => 'UUID',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'uuid_services_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_services_example/uuid_services_example.module',
        'basename' => 'uuid_services_example.module',
        'name' => 'uuid_services_example',
        'info' => 
        array (
          'name' => 'UUID Services Example',
          'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
          'core' => '7.x',
          'package' => 'Features',
          'php' => '5.2.4',
          'dependencies' => 
          array (
            0 => 'rest_server',
            1 => 'services',
            2 => 'uuid',
            3 => 'uuid_services',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'services:services:3',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'services_endpoint' => 
            array (
              0 => 'uuid_services_example',
            ),
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'uuid_default_entities_example' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid_default_entities_example/uuid_default_entities_example.module',
        'basename' => 'uuid_default_entities_example.module',
        'name' => 'uuid_default_entities_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'features',
            2 => 'uuid',
          ),
          'description' => 'Example feature mainly used for testing.',
          'features' => 
          array (
            'uuid_entities' => 
            array (
              0 => 'deploy_example_plan',
            ),
          ),
          'name' => 'UUID default entities example',
          'package' => 'Features',
          'version' => '7.x-1.0-alpha5',
          'project' => 'uuid',
          'datestamp' => '1373620283',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha5',
      ),
      'uuid' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/uuid/uuid.module',
        'basename' => 'uuid.module',
        'name' => 'uuid',
        'info' => 
        array (
          'name' => 'Universally Unique ID',
          'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
          'core' => '7.x',
          'package' => 'UUID',
          'configure' => 'admin/config/system/uuid',
          'files' => 
          array (
            0 => 'uuid.test',
          ),
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'user',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'uuid',
          'datestamp' => '1411455150',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha6',
      ),
      'admin_devel' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'tb_megamenu' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/tb_megamenu/tb_megamenu.module',
        'basename' => 'tb_megamenu.module',
        'name' => 'tb_megamenu',
        'info' => 
        array (
          'name' => 'TB Mega Menu',
          'description' => 'Megamenu solutions for Drupal',
          'package' => 'tb_megamenu',
          'version' => '7.x-1.0-beta5',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tb_megamenu.functions.inc',
            1 => 'tb_megamenu.themes.inc',
            2 => 'tb_megamenu.ajax.inc',
            3 => 'tb_megamenu.admin.inc',
            4 => 'tb_megamenu.module',
          ),
          'configure' => 'admin/structure/tb-megamenu',
          'project' => 'tb_megamenu',
          'datestamp' => '1408100329',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'tb_megamenu',
        'version' => '7.x-1.0-beta5',
      ),
      'blockexport' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/modules/blockexport/blockexport.module',
        'basename' => 'blockexport.module',
        'name' => 'blockexport',
        'info' => 
        array (
          'name' => 'Block Export',
          'description' => 'It will allow administrator to export all blocks as a single feature.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
          ),
          'version' => '7.x-1.0',
          'project' => 'blockexport',
          'datestamp' => '1343316154',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'blockexport',
        'version' => '7.x-1.0',
      ),
    ),
    'themes' => 
    array (
      'rhythm_sub' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/themes/rhythm/rhythm_sub/rhythm_sub.info',
        'basename' => 'rhythm_sub.info',
        'name' => 'Rhythm Sub-Theme',
        'info' => 
        array (
          'name' => 'Rhythm Sub-Theme',
          'description' => 'Rhythm is Responsive Drupal 7 Theme.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'base theme' => 'rhythm',
          'regions' => 
          array (
            'top' => 'Top',
            'content_top' => 'Content Top',
            'content' => 'Content',
            'sidebar' => 'Sidebar',
            'content_full' => 'Content Full Width',
            'bottom' => 'Content Bottom',
            'footer' => 'Footer',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/custom.css',
            ),
          ),
          'features' => 
          array (
            0 => 'name',
            1 => 'logo',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
          ),
          'settings' => 
          array (
            'toggle_name' => '1',
            'toggle_logo' => '1',
            'toggle_slogan' => '1',
            'toggle_node_user_picture' => '1',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '1',
            'loader_image' => '1',
          ),
          'version' => '7.x-1.1',
          'project' => 'Rhythm',
        ),
        'project' => 'Rhythm',
        'version' => '7.x-1.1',
      ),
      'rhythm' => 
      array (
        'filename' => '/data/disk/o1/static/krosae01/sites/all/themes/rhythm/rhythm.info',
        'basename' => 'rhythm.info',
        'name' => 'Rhythm',
        'info' => 
        array (
          'name' => 'Rhythm',
          'description' => 'Rhythm is Responsive Drupal 7 Theme.',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'regions' => 
          array (
            'top' => 'Top',
            'content_top' => 'Content Top',
            'content' => 'Content',
            'sidebar' => 'Sidebar',
            'content_full' => 'Content Full Width',
            'bottom' => 'Content Bottom',
            'footer' => 'Footer',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/bootstrap.min.css',
              1 => 'css/style.css',
              2 => 'css/style-responsive.css',
              3 => 'css/animate.min.css',
              4 => 'css/vertical-rhythm.min.css',
              5 => 'css/owl.carousel.css',
              6 => 'css/magnific-popup.css',
              7 => 'css/drupal.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/jquery.easing.1.3.js',
            1 => 'js/bootstrap.min.js',
            2 => 'js/SmoothScroll.js',
            3 => 'js/jquery.scrollTo.min.js',
            4 => 'js/jquery.localScroll.min.js',
            5 => 'js/jquery.viewport.mini.js',
            6 => 'js/jquery.countTo.js',
            7 => 'js/jquery.appear.js',
            8 => 'js/jquery.sticky.js',
            9 => 'js/jquery.parallax-1.1.3.js',
            10 => 'js/jquery.fitvids.js',
            11 => 'js/owl.carousel.min.js',
            12 => 'js/isotope.pkgd.min.js',
            13 => 'js/imagesloaded.pkgd.min.js',
            14 => 'js/jquery.magnific-popup.min.js',
            15 => 'js/gmap3.min.js',
            16 => 'js/wow.min.js',
            17 => 'js/masonry.pkgd.min.js',
            18 => 'js/jquery.simple-text-rotator.min.js',
            19 => 'js/jquery.mb.YTPlayer.js',
            20 => 'js/all.js',
            21 => 'js/drupal.js',
          ),
          'features' => 
          array (
            0 => 'name',
            1 => 'logo',
            2 => 'slogan',
            3 => 'node_user_picture',
            4 => 'comment_user_picture',
            5 => 'comment_user_verification',
            6 => 'favicon',
            7 => 'main_menu',
          ),
          'settings' => 
          array (
            'toggle_name' => '1',
            'toggle_logo' => '1',
            'toggle_slogan' => '1',
            'toggle_node_user_picture' => '1',
            'toggle_comment_user_picture' => '1',
            'toggle_comment_user_verification' => '1',
            'toggle_favicon' => '1',
            'toggle_main_menu' => '1',
            'loader_image' => '1',
          ),
          'version' => '7.x-1.1',
          'project' => 'Rhythm',
        ),
        'project' => 'Rhythm',
        'version' => '7.x-1.1',
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);