<?php

	include './content/configure.php';

	$sql1 = "create database nightowl";
	// $conn->query($sql1);

	$sql2 = "create table about(id varchar(100) primary key, value text)";

	$conn->query($sql2);

	$sql3 = "insert into about values('About', 'this is the testing content')";
	// $conn->query($sql3);

	$sql41 = "drop table media";
	$conn->query($sql41);

	$sql4 = "create table media (seasons varchar(100) primary key)";
	$conn->query($sql4);

	$sql4 = "create table artist (seasons varchar(100) primary key)";
	$conn->query($sql4);

	$sql4 = "create table gallery (seasons varchar(100) primary key)";
	$conn->query($sql4);

	$sql4 = "create table team (seasons varchar(100) primary key)";
	$conn->query($sql4);

	$sql4 = "create table exhibitor (seasons varchar(100) primary key)";
	$conn->query($sql4);

?>