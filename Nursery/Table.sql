create database nursery2021;
use nursery 2021;

create table admin( u varchar(100), p varchar(100));
 insert into admin values('a','a');
create table signup (Name varchar(100), Mobile varchar(100), DOB varchar(100),Address varchar(100), Photo varchar(100),EmailId varchar(100),PWD varchar(100));

create table feedback(
fullname  varchar(100),
feedback varchar(100), 
mobile varchar(100),
email varchar(100),
rate varchar(100));


create table product(
pid varchar(100),
pdesc varchar(100), 
rate varchar(100),
pic varchar(100),
Category varchar(100),
gst varchar(100));



create table carttemp(pid varchar(100),pdesc varchar(100),rate varchar(100), pic varchar(100),category varchar(100));

create table payment1 (billno varchar(100),pid varchar(100),pdesc varchar(100),rate varchar(100), pic varchar(100),weight varchar(100),category varchar(100));


create table payment2 (billno varchar(100),bdate varchar(100),
famt varchar(100),emailid varchar(100), fullname varchar(100), 
 addr varchar(100), ph varchar(100),status varchar(100));








create table carttemp(pid varchar(100),pdesc varchar(100),rate varchar(100), pic varchar(100));

create table payment1 (billno varchar(100),pid varchar(100),pdesc varchar(100),rate varchar(100), pic varchar(100),weight varchar(100),category varchar(100));


create table payment2 (billno varchar(100),bdate varchar(100),
famt varchar(100),emailid varchar(100), fullname varchar(100), 
 addr varchar(100), ph varchar(100),status varchar(100));



