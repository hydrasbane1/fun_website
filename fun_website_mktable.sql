CREATE TABLE users(
	user_id serial PRIMARY KEY,
	username varchar(30),
	email varchar(254),
	password varchar(128)
);
CREATE TABLE blog_posts(
	post_id serial PRIMARY KEY,
	title varchar(30),
	content text,
	author_id integer,
	created_at timestamp(0) with time zone DEFAULT CURRENT_TIMESTAMP
);
