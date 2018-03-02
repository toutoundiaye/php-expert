<?php

//Expiration  model

header('Expires: '. (new DateTimeImmutable('+1 day'))->format('c'));
header('Cache-control: private, max-age: 86400, s-max-age: 0');
header('Vary: Cookie, Authorization');
//Validation model

header('Last-modified: '. (new DateTimeImmutable('2018-02-25'))->format('c'));

$tag = md5($article->getTitle() . $article->getId() . count($article->getComments()));

header('Etag: '.$tag);

//invalider du cache sur du model d'expiration
'style.css?v=' . md5_file('style.css');