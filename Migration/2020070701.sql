ALTER TABLE `liyee_product_categories` DROP COLUMN `sorted`;
ALTER TABLE `liyee_product_posts` ADD COLUMN `related`  varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '关联产品,格式:1,2,3,4,5' AFTER `sorted`;
ALTER TABLE `liyee_product_posts` ADD COLUMN `position`  int(10) NULL DEFAULT 0 COMMENT '推荐位1:首页;2;4;' AFTER `related`;
CREATE TABLE `liyee_product_posts_recommend` (
`post_id`  int(10) UNSIGNED NOT NULL ,
`recommend_id`  int(10) UNSIGNED NOT NULL COMMENT '推荐产品id' ,
PRIMARY KEY (`post_id`, `recommend_id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci
ROW_FORMAT=Compact
;