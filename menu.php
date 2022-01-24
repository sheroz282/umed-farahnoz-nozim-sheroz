<?php

/* Pilaf with shrimp 
500 gram shrimps 
1,5 cup rice 
2 onion  
2 carrot 
2 cloves of garlic  
0,5 teaspoons salt
0,5 teaspoons black pepper, ground
6 teaspoons vegetable oil
3 teaspoons soy sauce
*/

function cookPilaf 
(int $shrimps
 float $rice
 int $onion
 int $carrot
 int $cloves_of_garlic
 float $salt
 float $pepper
 int $vegetable_oil
 int $soy_sauce
 string $wishes
)
 {
 echo 
"1. Peel and finely chop the $onion onion.<br>
2. Fry in a pan with well-heated $vegetable_oil teaspoons vegetable oil until light golden brown.<br>
3. Add $carrot carrots, cut into thin strips or small cubes or grated on a coarse grater.<br>
4. Fry over moderate heat until the carrots begin to brown. Add washed and dried $rice cup rice and cook, stirring, for about 5 minutes. Pour in water so that it covers the rice by 1 finger, close the lid and simmer over low heat until the liquid is completely absorbed.<br>
5. Peel $shrimps gram shrimp.<br>
6. And fry well in a small amount of vegetable oil. Add $soy_sauce teaspoons soy sauce, $pepper teaspoons spices, mix. <br>
7. Put the shrimp in the rice sauce, salt, mix and then simmer for a few minutes under the lid. Serve hot! <br>
$wishes ";
 
 /* Peel and finely chop the onion. 
Fry in a pan with well-heated vegetable oil until light golden brown.
Add carrots, cut into thin strips or small cubes or grated on a coarse grater.
Fry over moderate heat until the carrots begin to brown. Add washed and dried rice and cook, stirring, for about 5 minutes. Pour in water so that it covers the rice by 1 finger, close the lid and simmer over low heat until the liquid is completely absorbed. 
Peel shrimp. 
And fry well in a small amount of vegetable oil. Add soy sauce, spices, mix. 
Put the shrimp in the rice sauce, salt, mix and then simmer for a few minutes under the lid. Serve hot! */
 }
 
 cookPilaf(500, 1,5, 2, 2, 2, 0,5, 0,5, 6, 3, 'Bon appetit');
>