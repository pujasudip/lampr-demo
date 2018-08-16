<?php
 $data = [
     [
         'title' => 'Do Stuff',
         'details' => 'Do all the things'
     ],
     [
         'title' => 'Is it done?',
         'details' => 'Nice'
     ],
     [
         'title' => 'Do it',
         'details' => 'Nice job'
     ],
     [
         'title' => 'Ahh all done!',
         'details' => 'Excellent'
     ],
 ];

 $output = json_encode($data);

 print $output;
