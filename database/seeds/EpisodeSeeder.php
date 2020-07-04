<?php

use Illuminate\Database\Seeder;
use App\Episode;
use App\Series;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = Series::find(1);
        
        $ep = new Episode;
        $ep->title = 'Legion Episode 1 - Ep Title'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://i1.wp.com/www.comicsbeat.com/wp-content/uploads/2019/05/LegionPromo.jpg?fit=1013%2C608&ssl=1';
        $ep->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'Legion Episode 2 - Ep Title';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://i1.wp.com/www.comicsbeat.com/wp-content/uploads/2019/05/LegionPromo.jpg?fit=1013%2C608&ssl=1';
        $ep2->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'Legion Episode 3 - Ep Title';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://i1.wp.com/www.comicsbeat.com/wp-content/uploads/2019/05/LegionPromo.jpg?fit=1013%2C608&ssl=1';
        $ep3->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'Legion Episode 4 - Ep Title';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://i1.wp.com/www.comicsbeat.com/wp-content/uploads/2019/05/LegionPromo.jpg?fit=1013%2C608&ssl=1';
        $ep4->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep4->series()->associate($series);
        $ep4->save();


        $series = Series::find(2);

        $ep = new Episode;
        $ep->title = 'Vikings Episode 1 - Ep Title'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://miro.medium.com/max/800/1*hq41jb9ZVxAvwWsc1hCMuQ.jpeg';
        $ep->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'Vikings Episode 2 - Ep Title';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://miro.medium.com/max/800/1*hq41jb9ZVxAvwWsc1hCMuQ.jpeg';
        $ep2->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'Vikings Episode 3 - Ep Title';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://miro.medium.com/max/800/1*hq41jb9ZVxAvwWsc1hCMuQ.jpeg';
        $ep3->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'Vikings Episode 4 - Ep Title';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://miro.medium.com/max/800/1*hq41jb9ZVxAvwWsc1hCMuQ.jpeg';
        $ep4->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep4->series()->associate($series);
        $ep4->save();


        $series = Series::find(3);

        $ep = new Episode;
        $ep->title = 'Black Mirror Episode 1 - Ep Title'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://occ-0-1068-1723.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABUb8y4ccuEVy561Cyng-U7DYPnvBSEtASh7jutgnPDpIpjLmnSW3ke7syU6UCS9XFi9WbJ3PDfMRN3qwuzCP6iTlMTnB.jpg?r=72c';
        $ep->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'Black Mirror Episode 2 - Ep Title';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://occ-0-1068-1723.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABUb8y4ccuEVy561Cyng-U7DYPnvBSEtASh7jutgnPDpIpjLmnSW3ke7syU6UCS9XFi9WbJ3PDfMRN3qwuzCP6iTlMTnB.jpg?r=72c';
        $ep2->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'Black Mirror Episode 3 - Ep Title';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://occ-0-1068-1723.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABUb8y4ccuEVy561Cyng-U7DYPnvBSEtASh7jutgnPDpIpjLmnSW3ke7syU6UCS9XFi9WbJ3PDfMRN3qwuzCP6iTlMTnB.jpg?r=72c';
        $ep3->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'Black Mirror Episode 4 - Ep Title';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://occ-0-1068-1723.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABUb8y4ccuEVy561Cyng-U7DYPnvBSEtASh7jutgnPDpIpjLmnSW3ke7syU6UCS9XFi9WbJ3PDfMRN3qwuzCP6iTlMTnB.jpg?r=72c';
        $ep4->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep4->series()->associate($series);
        $ep4->save();


        $series = Series::find(4);

        $ep = new Episode;
        $ep->title = 'Brooklyn Nine-Nine Episode 1 - Ep Title'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://miro.medium.com/max/7680/1*gOeV0oK1YGxszHkuK4cHdA.jpeg';
        $ep->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'Brooklyn Nine-Nine Episode 2 - Ep Title';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://miro.medium.com/max/7680/1*gOeV0oK1YGxszHkuK4cHdA.jpeg';
        $ep2->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'Brooklyn Nine-Nine Episode 3 - Ep Title';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://miro.medium.com/max/7680/1*gOeV0oK1YGxszHkuK4cHdA.jpeg';
        $ep3->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'Brooklyn Nine-Nine Episode 4 - Ep Title';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://miro.medium.com/max/7680/1*gOeV0oK1YGxszHkuK4cHdA.jpeg';
        $ep4->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep4->series()->associate($series);
        $ep4->save();


        $series = Series::find(5);

        $ep = new Episode;
        $ep->title = 'Silicon Valley Episode 1 - Ep Title'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://i.pinimg.com/originals/ef/d7/30/efd730db941b816992fe37e1e05c7fc4.jpg';
        $ep->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'Silicon Valley Episode 2 - Ep Title';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://i.pinimg.com/originals/ef/d7/30/efd730db941b816992fe37e1e05c7fc4.jpg';
        $ep2->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'Silicon Valley Episode 3 - Ep Title';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://i.pinimg.com/originals/ef/d7/30/efd730db941b816992fe37e1e05c7fc4.jpg';
        $ep3->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'Silicon Valley Episode 4 - Ep Title';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://i.pinimg.com/originals/ef/d7/30/efd730db941b816992fe37e1e05c7fc4.jpg';
        $ep4->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep4->series()->associate($series);
        $ep4->save();


        $series = Series::find(6);

        $ep = new Episode;
        $ep->title = 'Friends Episode 1 - Ep Title'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://masralarabia.net/images/friends-1568977438.jpg';
        $ep->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'Friends Episode 2 - Ep Title';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://masralarabia.net/images/friends-1568977438.jpg';
        $ep2->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'Friends Episode 3 - Ep Title';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://masralarabia.net/images/friends-1568977438.jpg';
        $ep3->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'Friends Episode 4 - Ep Title';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://masralarabia.net/images/friends-1568977438.jpg';
        $ep4->video = "https://www.youtube.com/embed/DH6d8-fTsww";
        $ep4->series()->associate($series);
        $ep4->save();
       








    }
}
