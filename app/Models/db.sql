drop database if exists guestbook;

create database guestbook;

use guestbook;

create table message (
    id int primary key auto_increment,
    content text not null,
    saved timestamp default current_timestamp
);

insert into message (content) values ('This is a test message.');
insert into message (content)  values ('This is a second test message.');