create table fig.users(
id bigint unsigned not null primary key auto_increment,
first_name varchar(50),
last_name varchar(50),
email varchar(255),
password varchar(255),
created_at date,
updated_at date);

create table fig.posts (
id bigint unsigned not null primary key AUTO_INCREMENT,
user_id bigint unsigned  not null,
title VARCHAR(255),
description text,
created_at datetime,
updated_at datetime,
FOREIGN KEY (user_id) REFERENCES users (id) on DELETE CASCADE on update CASCADE
); 

create table fig.categories (
id bigint unsigned not null primary key auto_increment,
title varchar(255),
created_at datetime,
updated_at datetime
);

create table fig.tags(
id bigint unsigned not null primary key auto_increment,
title varchar(255),
created_at datetime,
updated_at datetime
);

select * from fig.post_tag;


create table fig.post_tag(
tag_id bigint unsigned not null,
post_id bigint  not null,
foreign key (tag_id) references tags(id) on delete cascade on update cascade,
foreign key (post_id) references posts(id) on delete cascade on update cascade
);

insert into fig.post_tag (tag_id, post_id) values ('2', '1'), ('2', '1');


alter table fig.posts add category_id bigint unsigned;

alter table fig.posts add foreign key (category_id) references fig.categories (id);

insert into fig.posts (category_id) values ('1');