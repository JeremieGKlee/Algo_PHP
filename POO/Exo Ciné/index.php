<?php


include 'Film.php';
include 'Personne.php';
include 'Realisateur.php';
include 'Acteur.php';
include 'Genre';
include 'Role.php';

// class film ($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre)
// class Personne ($nom,$prenom,$dateDeNaissance)
// class Acteur ($nom,$prenom,$dateDeNaissance)
// class Realisateur ($nom,$prenom,$dateDeNaissance)
// class Genre ($genreDeFilm)
// class Role ($nomDuRole)


$r1 = new Realisateur("KOPTER","Elie","1958-10-11");
$r2 = new Realisateur("PALETAN","Enora","1947-08-25");
$r3 = new Realisateur("NOUI","Eva","1977-05-13");
$r4 = new Realisateur("COVER","Harry","1956-02-12");
$r5 = new Realisateur("AYMAR","Jean","1947-08-24");
$r6 = new Realisateur("DENT","Jessie","1997-09-19");
$r7 = new Realisateur("TERIEUR","Alain","1975-01-28");
$r8 = new Realisateur("BO","Harry","1967-02-24");

$a1 = new Acteur("EVENU","Hilaire","1981-10-21");
$a2 = new Acteur("SLAVE","Hugo","1982-08-05");
$a3 = new Acteur("HADY","Jacques","1984-06-11");
$a4 = new Acteur("DMEPASSA","Jeanne","1959-03-13");
$a5 = new Acteur("QUEUNYTET","Jenny","1963-08-24");
$a6 = new Acteur("PERE","Jess","1964-08-15");
$a7 = new Acteur("COUP","Justin","1975-03-16");
$a8 = new Acteur("GOLADE","Larry","1968-07-28");

$g1 = new Genre("Horreur");
$g2 = new Genre("Dramatique");
$g3 = new Genre("Amour");
$g4 = new Genre("S.F.");
$g5 = new Genre("Action");
$g6 = new Genre("Famille");
$g7 = new Genre("Policier");
$g8 = new Genre("Adulte");

$r1 = new Role("Inspecteur de police");
$r2 = new Role("Serveur 1");
$r3 = new Role("Serveur 2");
$r4 = new Role("Mechant 1");
$r5 = new Role("Mechant 2");
$r6 = new Role("Coronavirus");
$r7 = new Role("Deadpool");
$r8 = new Role("L'inconnu");

// class film ($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre)

$f1 = new Film("","1980",90,"Lara Clette","$r8","$g1");
$f2 = new Film("","2020",87,"Larry Zona et Missis Hippy","$r7","$g2");
$f3 = new Film("","1973",125,"Line Ot'tension","$r6","$g3");
$f4 = new Film("","1977",132,"Luc Ratif","$r5","$g4");
$f5 = new Film("","1981",65,"Lucas-René Fenêtre","$r4","$g5");
$f6 = new Film("","1993",111,"Luce Hyfer O'Zenfer","$r3","$g6");
$f7 = new Film("","2011",77,"","$r2","$g7");
$f8 = new Film("","2014",89,"","$r1","$g8");
$f9 = new Film("","2015",131,"","$r8","$g1");
$f10 = new Film("","2017",94,"","$r7","$g2");
$f11 = new Film("","1983",113,"","$r6","$g3");
$f12 = new Film("","1988",104,"","$r5","$g4");
$f13 = new Film("","2001",91,"","$r4","$g5");
$f14 = new Film("","2019",82,"","$r3","$g6");
$f15 = new Film("","2005",73,"","$r2","$g7");
$f16 = new Film("","2009",79,"","$r1","$g8");