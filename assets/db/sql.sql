/* Create TABLE managed_images */
CREATE TABLE `managed_images` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `size` int(11) DEFAULT NULL,
    `type` varchar(255) DEFAULT NULL,
    `url` varchar(255) DEFAULT NULL,
    `title` varchar(255) DEFAULT NULL,
    `description` text,
    `topic` varchar(20) DEFAULT NULL,
    `is_cover` int(4) DEFAULT 0,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Create TABLE topics */
CREATE TABLE `topics` (
    `id` int(11) unsigned NOT NULL,
    `name` varchar(255) DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Create TABLE image_wall_images */
-- CREATE TABLE `image_wall_images` (
--     `id` int(11) unsigned NOT NULL,
--     `iid` int(11) unsigned NOT NULL,
--     `name` varchar(255) DEFAULT NULL,
--     `description` varchar(255) DEFAULT NULL,
--     PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Create TABLE image_wall_images */
CREATE TABLE `footprints` (
    `id` int(11) unsigned NOT NULL,
    `title` varchar(255) DEFAULT NULL,
    `body` LONGTEXT DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;