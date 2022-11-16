drop database CNTTBlog;
create database CNTTBlog;
use CNTTBlog;
create table if not exists failed_jobs
(
    id int unsigned auto_increment
    primary key,
    uuid varchar(255) not null,
    connection text not null,
    queue text not null,
    payload longtext not null,
    exception longtext not null,
    failed_at timestamp default CURRENT_TIMESTAMP not null,
    constraint failed_jobs_uuid_unique
    unique (uuid)
    )
    collate=utf8mb4_unicode_ci;

create table if not exists migrations
(
    id int unsigned auto_increment
    primary key,
    migration varchar(255) not null,
    batch int not null
    )
    collate=utf8mb4_unicode_ci;

create table if not exists password_resets
(
    email varchar(255) not null,
    token varchar(255) not null,
    created_at timestamp null
    )
    collate=utf8mb4_unicode_ci;

create index password_resets_email_index
    on password_resets (email);

create table if not exists personal_access_tokens
(
    id int unsigned auto_increment
    primary key,
    tokenable_type varchar(255) not null,
    tokenable_id int unsigned not null,
    name varchar(255) not null,
    token varchar(64) not null,
    abilities text null,
    last_used_at timestamp null,
    expires_at timestamp null,
    created_at timestamp null,
    updated_at timestamp null,
    constraint personal_access_tokens_token_unique
    unique (token)
    )
    collate=utf8mb4_unicode_ci;

create index personal_access_tokens_tokenable_type_tokenable_id_index
    on personal_access_tokens (tokenable_type, tokenable_id);

create table if not exists users
(
    id int unsigned auto_increment primary key,
    name varchar(255) not null,
    email varchar(255) not null,
    email_verified_at timestamp null,
    firstName VARCHAR(50) NULL DEFAULT NULL,
    middleName VARCHAR(50) NULL DEFAULT NULL,
    lastName VARCHAR(50) NULL DEFAULT NULL,
    lastLogin timestamp NULL DEFAULT NULL,
    intro TINYTEXT NULL DEFAULT NULL,
    profile TEXT NULL DEFAULT NULL,
    password varchar(255) not null,
    remember_token varchar(100) null,
    created_at timestamp null,
    updated_at timestamp null,
    enabled TINYINT NOT NULL DEFAULT 1,
    constraint users_email_unique
    unique (email)
    )
    collate=utf8mb4_unicode_ci;

create table if not exists `CNTTBlog`.`roles` (
                                                  `id` int NOT NULL AUTO_INCREMENT,
                                                  `title` VARCHAR(75) NOT NULL,
    `slug` VARCHAR(100) NOT NULL,
    `description` TINYTEXT NULL,
    `active` TINYINT(1) NOT NULL DEFAULT 0,
    `created_at` timestamp NOT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `content` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `uq_slug` (`slug` ASC)
    )
    collate=utf8mb4_unicode_ci;


create table if not exists `CNTTBlog`.`permissions` (
                                                        `id` int NOT NULL AUTO_INCREMENT,
                                                        `title` VARCHAR(75) NOT NULL,
    `slug` VARCHAR(100) NOT NULL,
    `description` TINYTEXT NULL,
    `active` TINYINT(1) NOT NULL DEFAULT 0,
    `created_at` timestamp NOT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `content` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `uq_slug` (`slug` ASC)
    )collate=utf8mb4_unicode_ci;


create table if not exists `CNTTBlog`.`role_permissions` (
                                                             `role_id` int NOT NULL AUTO_INCREMENT,
                                                             `permission_id` int NOT NULL,
                                                             `created_at` timestamp NOT NULL,
                                                             `updated_at` timestamp NULL,
                                                             PRIMARY KEY (`role_id`, `permission_id`),
    INDEX `idx_rp_role` (`role_id` ASC),
    INDEX `idx_rp_permissions` (`permission_id` ASC),
    CONSTRAINT `fk_rp_role`
    FOREIGN KEY (`role_id`)
    REFERENCES `CNTTBlog`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_rp_permission`
    FOREIGN KEY (`permission_id`)
    REFERENCES `CNTTBlog`.`permissions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    )collate=utf8mb4_unicode_ci;


ALTER TABLE `CNTTBlog`.`users`
    ADD COLUMN `role_id` int NOT NULL AFTER `id`,
ADD INDEX `idx_user_role` (`role_id` ASC);

ALTER TABLE `CNTTBlog`.`users`
    ADD CONSTRAINT `fk_user_role`
        FOREIGN KEY (`role_id`)
            REFERENCES `CNTTBlog`.`roles` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION;
# Blog ==================================

create table if not exists `CNTTBlog`.`posts` (
                                                  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Post ID',
                                                  `name` varchar(255) DEFAULT NULL COMMENT 'Post Name',
    `short_description` mediumtext COMMENT 'Post Short Description',
    `metaTitle` VARCHAR(100) NULL,
    `slug` VARCHAR(100) NOT NULL,
    `status` VARCHAR(100) not null default 'pending',
    `post_content` mediumtext COMMENT 'Post Content',
    `image` varchar(255) DEFAULT NULL COMMENT 'Post Image',
    `views` int DEFAULT NULL COMMENT 'Post Views ',
    `enabled` int DEFAULT '1' COMMENT 'Post Enabled',
    `url_key` varchar(255) DEFAULT NULL COMMENT 'Post URL Key',
    `allow_comment` int NOT NULL DEFAULT '0' COMMENT 'Post Allow Comment',
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Post Created At',
    `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Post Updated At',
    `author_id` int unsigned DEFAULT NULL COMMENT 'Author ID',
    `modifier_id` int unsigned DEFAULT NULL COMMENT 'Author ID',
    `publish_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Post Updated At',
    `banner_image` text COMMENT 'Banner Image',
    `featured_image` text COMMENT 'featured_image',

    PRIMARY KEY (`id`),
    UNIQUE INDEX `uq_slug` (`slug` ASC),
    INDEX `idx_post_user` (`author_id` ASC),
    INDEX `idx_post_url_key` (`url_key` ASC),
    CONSTRAINT `fk_post_user`
    FOREIGN KEY (`author_id`)
    REFERENCES `CNTTBlog`.`users` (`id`)
                                                          ON DELETE NO ACTION
                                                          ON UPDATE NO ACTION,
    CONSTRAINT `fk_post_modifier`
    FOREIGN KEY (`modifier_id`)
    REFERENCES `CNTTBlog`.`users` (`id`)
                                                          ON DELETE NO ACTION
                                                          ON UPDATE NO ACTION
    ) collate=utf8mb4_unicode_ci;



create table if not exists `CNTTBlog`.`post_comments` (
                                                          `id` int NOT NULL AUTO_INCREMENT,
                                                          `post_id` int unsigned NOT NULL,
                                                          `parent_id` int NULL DEFAULT NULL,
                                                          `user_id` int unsigned NOT NULL,
                                                          `title` VARCHAR(100) NOT NULL,
    `published` TINYINT(1) NOT NULL DEFAULT 0,
    `enabled` TINYINT NOT NULL DEFAULT 1,
    `created_at` timestamp NOT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `published_at` timestamp NULL DEFAULT NULL,
    `content` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    INDEX `idx_comment_post` (`post_id` ASC),
    CONSTRAINT `fk_comment_post`
    FOREIGN KEY (`post_id`)
    REFERENCES `CNTTBlog`.`posts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_upc_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `CNTTBlog`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION

    ) collate=utf8mb4_unicode_ci;

ALTER TABLE `CNTTBlog`.`post_comments`
    ADD INDEX `idx_comment_parent` (`parent_id` ASC);
ALTER TABLE `CNTTBlog`.`post_comments`
    ADD CONSTRAINT `fk_comment_parent`
        FOREIGN KEY (`parent_id`)
            REFERENCES `CNTTBlog`.`post_comments` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION;


create table if not exists `CNTTBlog`.`categorys` (
                                                      `id` int NOT NULL AUTO_INCREMENT,
                                                      `parent_id` int NULL DEFAULT NULL,
                                                      `title` VARCHAR(75) NOT NULL,
    `image` varchar(200) null default null,
    `metaTitle` VARCHAR(100) NULL DEFAULT NULL,
    `url_rewrite` VARCHAR(100) NOT NULL,
    `content` TEXT NULL DEFAULT NULL,
    `enabled` TINYINT NOT NULL DEFAULT 1,
    `created_at` timestamp NOT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)) collate=utf8mb4_unicode_ci;

ALTER TABLE `CNTTBlog`.`categorys`
    ADD INDEX `idx_category_parent` (`parent_id` ASC),
    ADD INDEX `idx_category_url_rewrite` (`url_rewrite` ASC );

ALTER TABLE `CNTTBlog`.`categorys`
    ADD CONSTRAINT `fk_category_parent`
        FOREIGN KEY (`parent_id`)
            REFERENCES `CNTTBlog`.`categorys` (`id`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION;


create table if not exists `CNTTBlog`.`post_categorys` (
                                                           `post_id` int unsigned NOT NULL,
                                                           `category_id` int NOT NULL,
                                                           PRIMARY KEY (`post_id`, `category_id`),
    INDEX `idx_pc_category` (`category_id` ASC),
    INDEX `idx_pc_post` (`post_id` ASC),
    CONSTRAINT `fk_pc_post`
    FOREIGN KEY (`post_id`)
    REFERENCES `CNTTBlog`.`posts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_pc_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `CNTTBlog`.`categorys` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION) collate=utf8mb4_unicode_ci;


create table if not exists `CNTTBlog`.`hashtag` (
      `id` int NOT NULL AUTO_INCREMENT,
      `title` VARCHAR(75) NOT NULL,
    `enabled` TINYINT NOT NULL DEFAULT 1,
    `created_at` timestamp NOT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)) collate=utf8mb4_unicode_ci;


create table if not exists `CNTTBlog`.`post_hashtag`(
    `post_id` int unsigned NOT NULL  COMMENT 'Post ID',
    `hashtag_id` int not null COMMENT 'HashTag ID',
    PRIMARY KEY (`post_id`,`hashtag_id`),
    INDEX `idx_hashtag_post_id` (`post_id` ASC),
    CONSTRAINT `fk_hashtag_post`
        FOREIGN KEY (`post_id`)
        REFERENCES `CNTTBlog`.`posts` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    CONSTRAINT `fk_post_hashtag`
    FOREIGN KEY (`hashtag_id`)
    REFERENCES `CNTTBlog`.`hashtag` (`id`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
    ) collate=utf8mb4_unicode_ci;





