<<<<<<< HEAD
CREATE TABLE `cache` (
  `id` char(40) NOT NULL default '',
  `expires` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `data` longtext,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
=======
CREATE TABLE `cache` (
  `id` char(40) NOT NULL default '',
  `expires` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `data` longtext,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`)
>>>>>>> branch 'cdn' of https://github.com/sjlu/CodeIgniter-Bootstrap.git
) ENGINE=MyISAM DEFAULT CHARSET=utf8
