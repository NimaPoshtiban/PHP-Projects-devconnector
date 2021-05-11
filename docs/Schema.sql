CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `created_at` datetime,
  `status` enum,
  `company` varchar(255),
  `website` varchar(255),
  `location` varchar(255),
  `skills` text,
  `github_username` varchar(255),
  `bio` text,
  `twitter_url` text,
  `facebook_url` text,
  `youtube_url` text,
  `linkedin_url` text,
  `instagram_url` text
);

CREATE TABLE `posts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `content` text,
  `created_at` datetime
);

CREATE TABLE `comments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `post_id` int,
  `content` text,
  `created_at` datetime
);

CREATE TABLE `reactions` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `post_id` int,
  `reaction` enum
);

ALTER TABLE `posts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

ALTER TABLE `reactions` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `reactions` ADD FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
