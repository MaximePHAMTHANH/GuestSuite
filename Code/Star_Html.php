<?php

function Star_Html($star_nb,$color,$type){
	Star_init();
	
	if ($star_nb==0){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==1){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star25"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==2){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star50"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==3){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star75"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==4){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==5){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star25"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==6){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star50"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==7){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star75"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==8){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==9){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star25"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==10){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star50"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==11){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star75"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==12){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==13){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star25"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==14){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star50"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==15){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star75"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==16){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star0"></use>
              </svg>
       ';}
	elseif ($star_nb==17){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star25"></use>
              </svg>
       ';}
	elseif ($star_nb==18){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star50"></use>
              </svg>
       ';}
	elseif ($star_nb==19){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star75"></use>
              </svg>
       ';}
	elseif ($star_nb==20){
		return '
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
              <svg class="GuestSuite_Star_'.$type.'"  style="fill:'.$color.'" width="16" height="16">
                  <use href="#star100"></use>
              </svg>
       ';}

}


function Star_init(){
	echo '
		<svg style="display:none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
		<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="star0">
		<path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
		</symbol>
		</svg>
		<svg style="display:none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
		<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="star25">
		<path d="M 5.354,5.119 7.538,0.792 C 7.6235765,0.61440432 7.8028646,0.50108802 8,0.5 c 0.183,0 0.366,0.097 0.465,0.292 l 2.184,4.327 4.898,0.696 C 15.798674,5.854565 15.987909,6.0655218 16,6.16 16.01414,6.4864936 15.95155,6.6503418 15.83,6.765 l -3.523,3.356 0.83,4.73 c 0.078,0.443 -0.36,0.79 -0.746,0.592 L 8,13.187 3.611,15.443 c -0.045909,0.02384 -0.095117,0.04069 -0.146,0.05 -0.342,0.06 -0.668,-0.254 -0.6,-0.642 L 3.695,10.121 0.173,6.765 C 0.06232185,6.6602892 3.8756528e-5,6.5143584 0.001,6.362 0.00105201,6.2554363 0.03046135,6.1509466 0.086,6.06 0.16580361,5.9264548 0.30189741,5.8363386 0.456,5.815 Z M 8,12.027 c 0.08072,-3.34e-4 0.1603208,0.01888 0.232,0.056 l 3.686,1.894 -0.694,-3.957 C 11.19073,9.8352056 11.25144,9.6459574 11.386,9.515 L 14.293,6.745 10.241,6.169 C 10.070688,6.1432807 9.9238245,6.0356558 9.848,5.881 L 8.001,2.223 5.4501217,6.4887737 5,6.6 v 6.807995 z"/>
		</symbol>
		</svg>
		<svg style="display:none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
		<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="star50">
		<path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
		</symbol>
		</svg>
		<svg style="display:none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
		<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="star75">
		<path d="M 5.354,5.119 7.538,0.792 C 7.6235765,0.61440432 7.8028646,0.50108802 8,0.5 c 0.183,0 0.366,0.097 0.465,0.292 l 2.184,4.327 4.898,0.696 c 0.251674,0.039565 0.440909,0.2505218 0.453,0.505 0.01414,0.1664936 -0.04845,0.3303418 -0.17,0.445 l -3.523,3.356 0.83,4.73 c 0.078,0.443 -0.36,0.79 -0.746,0.592 L 8,13.187 3.611,15.443 c -0.045909,0.02384 -0.095117,0.04069 -0.146,0.05 -0.342,0.06 -0.668,-0.254 -0.6,-0.642 L 3.695,10.121 0.173,6.765 C 0.06232185,6.6602892 3.8756528e-5,6.5143584 0.001,6.362 0.00105201,6.2554363 0.03046135,6.1509466 0.086,6.06 0.16580361,5.9264548 0.30189741,5.8363386 0.456,5.815 Z M 8,12.027 c 0.08072,-3.34e-4 0.1603208,0.01888 0.232,0.056 l 3.686,1.894 -0.694,-3.957 c -0.03327,-0.1847944 0.02744,-0.3740426 0.162,-0.505 L 14.293,6.745 10.241,6.169 C 10.070688,6.1432807 9.9238245,6.0356558 9.848,5.881 L 8.001,2.223 10.8,6.0410852 v 7.6199508 z"/>
		</symbol>
		</svg>
		<svg  style="display:none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
		<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="star100">
		<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
		</symbol>
		</svg>
		';
}