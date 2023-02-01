<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulateHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(DB::table('hobbies')->where('name', '=','3D printing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'3D printing')));}
        if(!(DB::table('hobbies')->where('name', '=','Acroyoga')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Acroyoga')));}
        if(!(DB::table('hobbies')->where('name', '=','Acting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Acting')));}
        if(!(DB::table('hobbies')->where('name', '=','Action figure')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Action figure')));}
        if(!(DB::table('hobbies')->where('name', '=','Aerial silk')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Aerial silk')));}
        if(!(DB::table('hobbies')->where('name', '=','Air sports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Air sports')));}
        if(!(DB::table('hobbies')->where('name', '=','Airbrushing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Airbrushing')));}
        if(!(DB::table('hobbies')->where('name', '=','Aircraft spotting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Aircraft spotting')));}
        if(!(DB::table('hobbies')->where('name', '=','Airsoft')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Airsoft')));}
        if(!(DB::table('hobbies')->where('name', '=','Amateur astronomy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Amateur astronomy')));}
        if(!(DB::table('hobbies')->where('name', '=','Amateur geology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Amateur geology')));}
        if(!(DB::table('hobbies')->where('name', '=','Amateur radio')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Amateur radio')));}
        if(!(DB::table('hobbies')->where('name', '=','Amusement park visiting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Amusement park visiting')));}
        if(!(DB::table('hobbies')->where('name', '=','Animal fancy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Animal fancy')));}
        if(!(DB::table('hobbies')->where('name', '=','Animation')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Animation')));}
        if(!(DB::table('hobbies')->where('name', '=','Antiquing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Antiquing')));}
        if(!(DB::table('hobbies')->where('name', '=','Antiquities')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Antiquities')));}
        if(!(DB::table('hobbies')->where('name', '=','Ant-keeping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ant-keeping')));}
        if(!(DB::table('hobbies')->where('name', '=','Aquascaping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Aquascaping')));}
        if(!(DB::table('hobbies')->where('name', '=','Archaeology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Archaeology')));}
        if(!(DB::table('hobbies')->where('name', '=','Archery')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Archery')));}
        if(!(DB::table('hobbies')->where('name', '=','Art')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Art')));}
        if(!(DB::table('hobbies')->where('name', '=','Art collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Art collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Association football')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Association football')));}
        if(!(DB::table('hobbies')->where('name', '=','Astrology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Astrology')));}
        if(!(DB::table('hobbies')->where('name', '=','Astronomy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Astronomy')));}
        if(!(DB::table('hobbies')->where('name', '=','Astronomy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Astronomy')));}
        if(!(DB::table('hobbies')->where('name', '=','Audiophile')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Audiophile')));}
        if(!(DB::table('hobbies')->where('name', '=','Australian rules football')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Australian rules football')));}
        if(!(DB::table('hobbies')->where('name', '=','Auto audiophilia')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Auto audiophilia')));}
        if(!(DB::table('hobbies')->where('name', '=','Auto detailing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Auto detailing')));}
        if(!(DB::table('hobbies')->where('name', '=','Auto racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Auto racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Automobilism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Automobilism')));}
        if(!(DB::table('hobbies')->where('name', '=','Axe throwing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Axe throwing')));}
        if(!(DB::table('hobbies')->where('name', '=','Babysitting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Babysitting')));}
        if(!(DB::table('hobbies')->where('name', '=','Backgammon')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Backgammon')));}
        if(!(DB::table('hobbies')->where('name', '=','Backpacking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Backpacking')));}
        if(!(DB::table('hobbies')->where('name', '=','Badminton')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Badminton')));}
        if(!(DB::table('hobbies')->where('name', '=','Badminton')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Badminton')));}
        if(!(DB::table('hobbies')->where('name', '=','Baking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Baking')));}
        if(!(DB::table('hobbies')->where('name', '=','BASE jumping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'BASE jumping')));}
        if(!(DB::table('hobbies')->where('name', '=','Baseball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Baseball')));}
        if(!(DB::table('hobbies')->where('name', '=','Baseball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Baseball')));}
        if(!(DB::table('hobbies')->where('name', '=','Basketball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Basketball')));}
        if(!(DB::table('hobbies')->where('name', '=','Baton twirling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Baton twirling')));}
        if(!(DB::table('hobbies')->where('name', '=','Beach volleyball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Beach volleyball')));}
        if(!(DB::table('hobbies')->where('name', '=','Beachcombing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Beachcombing')));}
        if(!(DB::table('hobbies')->where('name', '=','Beatboxing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Beatboxing')));}
        if(!(DB::table('hobbies')->where('name', '=','Beauty pageants')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Beauty pageants')));}
        if(!(DB::table('hobbies')->where('name', '=','Beekeeping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Beekeeping')));}
        if(!(DB::table('hobbies')->where('name', '=','Beer tasting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Beer tasting')));}
        if(!(DB::table('hobbies')->where('name', '=','Benchmarking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Benchmarking')));}
        if(!(DB::table('hobbies')->where('name', '=','Billiards')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Billiards')));}
        if(!(DB::table('hobbies')->where('name', '=','Binge-watching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Binge-watching')));}
        if(!(DB::table('hobbies')->where('name', '=','Biology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Biology')));}
        if(!(DB::table('hobbies')->where('name', '=','Birdwatching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Birdwatching')));}
        if(!(DB::table('hobbies')->where('name', '=','Blacksmithing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Blacksmithing')));}
        if(!(DB::table('hobbies')->where('name', '=','Blogging')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Blogging')));}
        if(!(DB::table('hobbies')->where('name', '=','BMX')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'BMX')));}
        if(!(DB::table('hobbies')->where('name', '=','Board sports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Board sports')));}
        if(!(DB::table('hobbies')->where('name', '=','Board/tabletop games')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Board/tabletop games')));}
        if(!(DB::table('hobbies')->where('name', '=','Bodybuilding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bodybuilding')));}
        if(!(DB::table('hobbies')->where('name', '=','Bonsai')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bonsai')));}
        if(!(DB::table('hobbies')->where('name', '=','Book collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Book collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Book discussion clubs')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Book discussion clubs')));}
        if(!(DB::table('hobbies')->where('name', '=','Book restoration')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Book restoration')));}
        if(!(DB::table('hobbies')->where('name', '=','Bowling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bowling')));}
        if(!(DB::table('hobbies')->where('name', '=','Boxing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Boxing')));}
        if(!(DB::table('hobbies')->where('name', '=','Brazilian jiu-jitsu')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Brazilian jiu-jitsu')));}
        if(!(DB::table('hobbies')->where('name', '=','Breadmaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Breadmaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Breakdancing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Breakdancing')));}
        if(!(DB::table('hobbies')->where('name', '=','Bridge')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bridge')));}
        if(!(DB::table('hobbies')->where('name', '=','Building')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Building')));}
        if(!(DB::table('hobbies')->where('name', '=','Bullet journaling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bullet journaling')));}
        if(!(DB::table('hobbies')->where('name', '=','Bus riding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bus riding')));}
        if(!(DB::table('hobbies')->where('name', '=','Bus spotting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Bus spotting')));}
        if(!(DB::table('hobbies')->where('name', '=','Butterfly watching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Butterfly watching')));}
        if(!(DB::table('hobbies')->where('name', '=','Button collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Button collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Cabaret')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cabaret')));}
        if(!(DB::table('hobbies')->where('name', '=','Calligraphy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Calligraphy')));}
        if(!(DB::table('hobbies')->where('name', '=','Camping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Camping')));}
        if(!(DB::table('hobbies')->where('name', '=','Candle making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Candle making')));}
        if(!(DB::table('hobbies')->where('name', '=','Candy making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Candy making')));}
        if(!(DB::table('hobbies')->where('name', '=','Canoeing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Canoeing')));}
        if(!(DB::table('hobbies')->where('name', '=','Canyoning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Canyoning')));}
        if(!(DB::table('hobbies')->where('name', '=','Car fixing & building')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Car fixing & building')));}
        if(!(DB::table('hobbies')->where('name', '=','Car riding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Car riding')));}
        if(!(DB::table('hobbies')->where('name', '=','Car tuning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Car tuning')));}
        if(!(DB::table('hobbies')->where('name', '=','Card games')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Card games')));}
        if(!(DB::table('hobbies')->where('name', '=','Cardistry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cardistry')));}
        if(!(DB::table('hobbies')->where('name', '=','Cartophily (card collecting)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cartophily (card collecting)')));}
        if(!(DB::table('hobbies')->where('name', '=','Caving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Caving')));}
        if(!(DB::table('hobbies')->where('name', '=','Ceramics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ceramics')));}
        if(!(DB::table('hobbies')->where('name', '=','Chatting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Chatting')));}
        if(!(DB::table('hobbies')->where('name', '=','Checkers (draughts)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Checkers (draughts)')));}
        if(!(DB::table('hobbies')->where('name', '=','Cheerleading')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cheerleading')));}
        if(!(DB::table('hobbies')->where('name', '=','Cheesemaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cheesemaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Chemistry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Chemistry')));}
        if(!(DB::table('hobbies')->where('name', '=','Chess')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Chess')));}
        if(!(DB::table('hobbies')->where('name', '=','Chess')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Chess')));}
        if(!(DB::table('hobbies')->where('name', '=','City trip')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'City trip')));}
        if(!(DB::table('hobbies')->where('name', '=','Cleaning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cleaning')));}
        if(!(DB::table('hobbies')->where('name', '=','Climbing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Climbing')));}
        if(!(DB::table('hobbies')->where('name', '=','Clothesmaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Clothesmaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Coffee roasting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Coffee roasting')));}
        if(!(DB::table('hobbies')->where('name', '=','Coin collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Coin collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Color guard')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Color guard')));}
        if(!(DB::table('hobbies')->where('name', '=','Coloring')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Coloring')));}
        if(!(DB::table('hobbies')->where('name', '=','Comic book collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Comic book collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Communication')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Communication')));}
        if(!(DB::table('hobbies')->where('name', '=','Community activism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Community activism')));}
        if(!(DB::table('hobbies')->where('name', '=','Compact discs')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Compact discs')));}
        if(!(DB::table('hobbies')->where('name', '=','Composting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Composting')));}
        if(!(DB::table('hobbies')->where('name', '=','Computer programming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Computer programming')));}
        if(!(DB::table('hobbies')->where('name', '=','Confectionery')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Confectionery')));}
        if(!(DB::table('hobbies')->where('name', '=','Construction')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Construction')));}
        if(!(DB::table('hobbies')->where('name', '=','Cooking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cooking')));}
        if(!(DB::table('hobbies')->where('name', '=','Cornhole')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cornhole')));}
        if(!(DB::table('hobbies')->where('name', '=','Cosplaying')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cosplaying')));}
        if(!(DB::table('hobbies')->where('name', '=','Couch surfing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Couch surfing')));}
        if(!(DB::table('hobbies')->where('name', '=','Couponing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Couponing')));}
        if(!(DB::table('hobbies')->where('name', '=','Craft')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Craft')));}
        if(!(DB::table('hobbies')->where('name', '=','Creative writing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Creative writing')));}
        if(!(DB::table('hobbies')->where('name', '=','Credit card')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Credit card')));}
        if(!(DB::table('hobbies')->where('name', '=','Cribbage')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cribbage')));}
        if(!(DB::table('hobbies')->where('name', '=','Cricket')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cricket')));}
        if(!(DB::table('hobbies')->where('name', '=','Crocheting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Crocheting')));}
        if(!(DB::table('hobbies')->where('name', '=','Croquet')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Croquet')));}
        if(!(DB::table('hobbies')->where('name', '=','Cross-stitch')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cross-stitch')));}
        if(!(DB::table('hobbies')->where('name', '=','Crossword puzzles')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Crossword puzzles')));}
        if(!(DB::table('hobbies')->where('name', '=','Cryptography')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cryptography')));}
        if(!(DB::table('hobbies')->where('name', '=','Cue sports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cue sports')));}
        if(!(DB::table('hobbies')->where('name', '=','Curling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Curling')));}
        if(!(DB::table('hobbies')->where('name', '=','Cycling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Cycling')));}
        if(!(DB::table('hobbies')->where('name', '=','Dancing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dancing')));}
        if(!(DB::table('hobbies')->where('name', '=','Dandyism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dandyism')));}
        if(!(DB::table('hobbies')->where('name', '=','Darts')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Darts')));}
        if(!(DB::table('hobbies')->where('name', '=','Debate')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Debate')));}
        if(!(DB::table('hobbies')->where('name', '=','Decorating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Decorating')));}
        if(!(DB::table('hobbies')->where('name', '=','Deltiology (postcard collecting)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Deltiology (postcard collecting)')));}
        if(!(DB::table('hobbies')->where('name', '=','Die-cast toy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Die-cast toy')));}
        if(!(DB::table('hobbies')->where('name', '=','Digital arts')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Digital arts')));}
        if(!(DB::table('hobbies')->where('name', '=','Digital hoarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Digital hoarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Dining')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dining')));}
        if(!(DB::table('hobbies')->where('name', '=','Diorama')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Diorama')));}
        if(!(DB::table('hobbies')->where('name', '=','Disc golf')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Disc golf')));}
        if(!(DB::table('hobbies')->where('name', '=','Distro Hopping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Distro Hopping')));}
        if(!(DB::table('hobbies')->where('name', '=','Diving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Diving')));}
        if(!(DB::table('hobbies')->where('name', '=','Djembe')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Djembe')));}
        if(!(DB::table('hobbies')->where('name', '=','DJing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'DJing')));}
        if(!(DB::table('hobbies')->where('name', '=','Do it yourself')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Do it yourself')));}
        if(!(DB::table('hobbies')->where('name', '=','Dog sport')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dog sport')));}
        if(!(DB::table('hobbies')->where('name', '=','Dog training')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dog training')));}
        if(!(DB::table('hobbies')->where('name', '=','Dog walking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dog walking')));}
        if(!(DB::table('hobbies')->where('name', '=','Dolls')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dolls')));}
        if(!(DB::table('hobbies')->where('name', '=','Dominoes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dominoes')));}
        if(!(DB::table('hobbies')->where('name', '=','Dowsing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Dowsing')));}
        if(!(DB::table('hobbies')->where('name', '=','Drama')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Drama')));}
        if(!(DB::table('hobbies')->where('name', '=','Drawing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Drawing')));}
        if(!(DB::table('hobbies')->where('name', '=','Drink mixing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Drink mixing')));}
        if(!(DB::table('hobbies')->where('name', '=','Drinking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Drinking')));}
        if(!(DB::table('hobbies')->where('name', '=','Driving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Driving')));}
        if(!(DB::table('hobbies')->where('name', '=','Eating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Eating')));}
        if(!(DB::table('hobbies')->where('name', '=','Electrochemistry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Electrochemistry')));}
        if(!(DB::table('hobbies')->where('name', '=','Electronic games')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Electronic games')));}
        if(!(DB::table('hobbies')->where('name', '=','Electronics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Electronics')));}
        if(!(DB::table('hobbies')->where('name', '=','Element collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Element collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Embroidery')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Embroidery')));}
        if(!(DB::table('hobbies')->where('name', '=','Engraving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Engraving')));}
        if(!(DB::table('hobbies')->where('name', '=','Entertaining')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Entertaining')));}
        if(!(DB::table('hobbies')->where('name', '=','Ephemera collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ephemera collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Equestrianism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Equestrianism')));}
        if(!(DB::table('hobbies')->where('name', '=','Esports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Esports')));}
        if(!(DB::table('hobbies')->where('name', '=','Exhibition drill')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Exhibition drill')));}
        if(!(DB::table('hobbies')->where('name', '=','Experimenting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Experimenting')));}
        if(!(DB::table('hobbies')->where('name', '=','Fantasy sports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fantasy sports')));}
        if(!(DB::table('hobbies')->where('name', '=','Farming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Farming')));}
        if(!(DB::table('hobbies')->where('name', '=','Fashion')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fashion')));}
        if(!(DB::table('hobbies')->where('name', '=','Fashion design')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fashion design')));}
        if(!(DB::table('hobbies')->where('name', '=','Fencing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fencing')));}
        if(!(DB::table('hobbies')->where('name', '=','Feng shui decorating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Feng shui decorating')));}
        if(!(DB::table('hobbies')->where('name', '=','Field hockey')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Field hockey')));}
        if(!(DB::table('hobbies')->where('name', '=','Figure skating[30]')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Figure skating[30]')));}
        if(!(DB::table('hobbies')->where('name', '=','Filmmaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Filmmaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Films')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Films')));}
        if(!(DB::table('hobbies')->where('name', '=','Fingerpainting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fingerpainting')));}
        if(!(DB::table('hobbies')->where('name', '=','Fingerprint collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fingerprint collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Fishfarming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fishfarming')));}
        if(!(DB::table('hobbies')->where('name', '=','Fishing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fishing')));}
        if(!(DB::table('hobbies')->where('name', '=','Fishkeeping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fishkeeping')));}
        if(!(DB::table('hobbies')->where('name', '=','Fitness')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fitness')));}
        if(!(DB::table('hobbies')->where('name', '=','Flag football')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flag football')));}
        if(!(DB::table('hobbies')->where('name', '=','Flower arranging')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flower arranging')));}
        if(!(DB::table('hobbies')->where('name', '=','Flower collecting and pressing[')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flower collecting and pressing[')));}
        if(!(DB::table('hobbies')->where('name', '=','Flower growing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flower growing')));}
        if(!(DB::table('hobbies')->where('name', '=','Fly tying')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fly tying')));}
        if(!(DB::table('hobbies')->where('name', '=','Flying disc')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flying disc')));}
        if(!(DB::table('hobbies')->where('name', '=','Flying model planes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flying model planes')));}
        if(!(DB::table('hobbies')->where('name', '=','Flying')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Flying')));}
        if(!(DB::table('hobbies')->where('name', '=','Footbag')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Footbag')));}
        if(!(DB::table('hobbies')->where('name', '=','Foraging')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Foraging')));}
        if(!(DB::table('hobbies')->where('name', '=','Foreign language learning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Foreign language learning')));}
        if(!(DB::table('hobbies')->where('name', '=','Fossicking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fossicking')));}
        if(!(DB::table('hobbies')->where('name', '=','Fossil hunting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fossil hunting')));}
        if(!(DB::table('hobbies')->where('name', '=','Freestyle football')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Freestyle football')));}
        if(!(DB::table('hobbies')->where('name', '=','Frisbee')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Frisbee')));}
        if(!(DB::table('hobbies')->where('name', '=','Fruit picking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fruit picking')));}
        if(!(DB::table('hobbies')->where('name', '=','Furniture building')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Furniture building')));}
        if(!(DB::table('hobbies')->where('name', '=','Fusilately (phonecard collecting)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Fusilately (phonecard collecting)')));}
        if(!(DB::table('hobbies')->where('name', '=','Gardening')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gardening')));}
        if(!(DB::table('hobbies')->where('name', '=','Genealogy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Genealogy')));}
        if(!(DB::table('hobbies')->where('name', '=','Geocaching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Geocaching')));}
        if(!(DB::table('hobbies')->where('name', '=','Geography')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Geography')));}
        if(!(DB::table('hobbies')->where('name', '=','Ghost hunting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ghost hunting')));}
        if(!(DB::table('hobbies')->where('name', '=','Gingerbread house making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gingerbread house making')));}
        if(!(DB::table('hobbies')->where('name', '=','Giving advice')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Giving advice')));}
        if(!(DB::table('hobbies')->where('name', '=','Glassblowing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Glassblowing')));}
        if(!(DB::table('hobbies')->where('name', '=','Go')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Go')));}
        if(!(DB::table('hobbies')->where('name', '=','Gold prospecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gold prospecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Golfing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Golfing')));}
        if(!(DB::table('hobbies')->where('name', '=','Gongoozling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gongoozling')));}
        if(!(DB::table('hobbies')->where('name', '=','Graffiti')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Graffiti')));}
        if(!(DB::table('hobbies')->where('name', '=','Graphic design')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Graphic design')));}
        if(!(DB::table('hobbies')->where('name', '=','Groundhopping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Groundhopping')));}
        if(!(DB::table('hobbies')->where('name', '=','Guerrilla gardening')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Guerrilla gardening')));}
        if(!(DB::table('hobbies')->where('name', '=','Gunsmithing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gunsmithing')));}
        if(!(DB::table('hobbies')->where('name', '=','Gymnastics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gymnastics')));}
        if(!(DB::table('hobbies')->where('name', '=','Gymnastics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Gymnastics')));}
        if(!(DB::table('hobbies')->where('name', '=','Hacking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hacking')));}
        if(!(DB::table('hobbies')->where('name', '=','Handball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Handball')));}
        if(!(DB::table('hobbies')->where('name', '=','Hardware')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hardware')));}
        if(!(DB::table('hobbies')->where('name', '=','Herbalism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Herbalism')));}
        if(!(DB::table('hobbies')->where('name', '=','Herp keeping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Herp keeping')));}
        if(!(DB::table('hobbies')->where('name', '=','Herping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Herping')));}
        if(!(DB::table('hobbies')->where('name', '=','Herping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Herping')));}
        if(!(DB::table('hobbies')->where('name', '=','High-power rocketry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'High-power rocketry')));}
        if(!(DB::table('hobbies')->where('name', '=','Hiking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hiking')));}
        if(!(DB::table('hobbies')->where('name', '=','Hiking/backpacking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hiking/backpacking')));}
        if(!(DB::table('hobbies')->where('name', '=','History')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'History')));}
        if(!(DB::table('hobbies')->where('name', '=','Hobby horsing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hobby horsing')));}
        if(!(DB::table('hobbies')->where('name', '=','Hobby tunneling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hobby tunneling')));}
        if(!(DB::table('hobbies')->where('name', '=','Home improvement')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Home improvement')));}
        if(!(DB::table('hobbies')->where('name', '=','Homebrewing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Homebrewing')));}
        if(!(DB::table('hobbies')->where('name', '=','Hooping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hooping')));}
        if(!(DB::table('hobbies')->where('name', '=','Horseback riding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Horseback riding')));}
        if(!(DB::table('hobbies')->where('name', '=','Horseback riding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Horseback riding')));}
        if(!(DB::table('hobbies')->where('name', '=','Horsemanship')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Horsemanship')));}
        if(!(DB::table('hobbies')->where('name', '=','Horseshoes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Horseshoes')));}
        if(!(DB::table('hobbies')->where('name', '=','Houseplant care')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Houseplant care')));}
        if(!(DB::table('hobbies')->where('name', '=','Hula hooping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hula hooping')));}
        if(!(DB::table('hobbies')->where('name', '=','Humor')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Humor')));}
        if(!(DB::table('hobbies')->where('name', '=','Hunting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hunting')));}
        if(!(DB::table('hobbies')->where('name', '=','Hydroponics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Hydroponics')));}
        if(!(DB::table('hobbies')->where('name', '=','Ice hockey')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ice hockey')));}
        if(!(DB::table('hobbies')->where('name', '=','Ice skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ice skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Ice skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ice skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Iceboat racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Iceboat racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Indoors[edit]')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Indoors[edit]')));}
        if(!(DB::table('hobbies')->where('name', '=','Inline skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Inline skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Insect collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Insect collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Inventing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Inventing')));}
        if(!(DB::table('hobbies')->where('name', '=','Jewelry making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Jewelry making')));}
        if(!(DB::table('hobbies')->where('name', '=','Jigsaw puzzles')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Jigsaw puzzles')));}
        if(!(DB::table('hobbies')->where('name', '=','Jogging')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Jogging')));}
        if(!(DB::table('hobbies')->where('name', '=','Journaling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Journaling')));}
        if(!(DB::table('hobbies')->where('name', '=','Judo')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Judo')));}
        if(!(DB::table('hobbies')->where('name', '=','Juggling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Juggling')));}
        if(!(DB::table('hobbies')->where('name', '=','Jujitsu')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Jujitsu')));}
        if(!(DB::table('hobbies')->where('name', '=','Jukskei')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Jukskei')));}
        if(!(DB::table('hobbies')->where('name', '=','Jumping rope')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Jumping rope')));}
        if(!(DB::table('hobbies')->where('name', '=','Kabaddi')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kabaddi')));}
        if(!(DB::table('hobbies')->where('name', '=','Karaoke')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Karaoke')));}
        if(!(DB::table('hobbies')->where('name', '=','Karate')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Karate')));}
        if(!(DB::table('hobbies')->where('name', '=','Kart racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kart racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Karting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Karting')));}
        if(!(DB::table('hobbies')->where('name', '=','Kayaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kayaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Kendama')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kendama')));}
        if(!(DB::table('hobbies')->where('name', '=','Kite flying')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kite flying')));}
        if(!(DB::table('hobbies')->where('name', '=','Kitesurfing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kitesurfing')));}
        if(!(DB::table('hobbies')->where('name', '=','Knife collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Knife collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Knife making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Knife making')));}
        if(!(DB::table('hobbies')->where('name', '=','Knife throwing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Knife throwing')));}
        if(!(DB::table('hobbies')->where('name', '=','Knitting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Knitting')));}
        if(!(DB::table('hobbies')->where('name', '=','Knot tying')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Knot tying')));}
        if(!(DB::table('hobbies')->where('name', '=','Knowledge/word games')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Knowledge/word games')));}
        if(!(DB::table('hobbies')->where('name', '=','Kombucha brewing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kombucha brewing')));}
        if(!(DB::table('hobbies')->where('name', '=','Kung fu')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Kung fu')));}
        if(!(DB::table('hobbies')->where('name', '=','Lace making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lace making')));}
        if(!(DB::table('hobbies')->where('name', '=','Lacrosse')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lacrosse')));}
        if(!(DB::table('hobbies')->where('name', '=','Lacrosse')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lacrosse')));}
        if(!(DB::table('hobbies')->where('name', '=','Lapidary')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lapidary')));}
        if(!(DB::table('hobbies')->where('name', '=','LARPing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'LARPing')));}
        if(!(DB::table('hobbies')->where('name', '=','Laser tag')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Laser tag')));}
        if(!(DB::table('hobbies')->where('name', '=','Learning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Learning')));}
        if(!(DB::table('hobbies')->where('name', '=','Leather crafting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Leather crafting')));}
        if(!(DB::table('hobbies')->where('name', '=','Leaves')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Leaves')));}
        if(!(DB::table('hobbies')->where('name', '=','Lego building')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lego building')));}
        if(!(DB::table('hobbies')->where('name', '=','Letterboxing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Letterboxing')));}
        if(!(DB::table('hobbies')->where('name', '=','Listening to music')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Listening to music')));}
        if(!(DB::table('hobbies')->where('name', '=','Listening to podcasts')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Listening to podcasts')));}
        if(!(DB::table('hobbies')->where('name', '=','Livestreaming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Livestreaming')));}
        if(!(DB::table('hobbies')->where('name', '=','Lock picking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lock picking')));}
        if(!(DB::table('hobbies')->where('name', '=','Lomography')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lomography')));}
        if(!(DB::table('hobbies')->where('name', '=','Long-distance running')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Long-distance running')));}
        if(!(DB::table('hobbies')->where('name', '=','Longboarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Longboarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Longboarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Longboarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Longboarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Longboarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Lotology (lottery ticket collecting)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Lotology (lottery ticket collecting)')));}
        if(!(DB::table('hobbies')->where('name', '=','Machining')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Machining')));}
        if(!(DB::table('hobbies')->where('name', '=','Macrame')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Macrame')));}
        if(!(DB::table('hobbies')->where('name', '=','Magic')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Magic')));}
        if(!(DB::table('hobbies')->where('name', '=','Magic')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Magic')));}
        if(!(DB::table('hobbies')->where('name', '=','Magnet fishing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Magnet fishing')));}
        if(!(DB::table('hobbies')->where('name', '=','Mahjong')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mahjong')));}
        if(!(DB::table('hobbies')->where('name', '=','Makeup')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Makeup')));}
        if(!(DB::table('hobbies')->where('name', '=','Marbles')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Marbles')));}
        if(!(DB::table('hobbies')->where('name', '=','Marching band')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Marching band')));}
        if(!(DB::table('hobbies')->where('name', '=','Martial arts')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Martial arts')));}
        if(!(DB::table('hobbies')->where('name', '=','Martial arts')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Martial arts')));}
        if(!(DB::table('hobbies')->where('name', '=','Massaging')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Massaging')));}
        if(!(DB::table('hobbies')->where('name', '=','Mathematics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mathematics')));}
        if(!(DB::table('hobbies')->where('name', '=','Mazes (indoor/outdoor)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mazes (indoor/outdoor)')));}
        if(!(DB::table('hobbies')->where('name', '=','Mechanics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mechanics')));}
        if(!(DB::table('hobbies')->where('name', '=','Medical science')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Medical science')));}
        if(!(DB::table('hobbies')->where('name', '=','Meditation')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Meditation')));}
        if(!(DB::table('hobbies')->where('name', '=','Meditation')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Meditation')));}
        if(!(DB::table('hobbies')->where('name', '=','Memory training')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Memory training')));}
        if(!(DB::table('hobbies')->where('name', '=','Metal detecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Metal detecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Metal detecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Metal detecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Metalworking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Metalworking')));}
        if(!(DB::table('hobbies')->where('name', '=','Meteorology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Meteorology')));}
        if(!(DB::table('hobbies')->where('name', '=','Microbiology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Microbiology')));}
        if(!(DB::table('hobbies')->where('name', '=','Microscopy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Microscopy')));}
        if(!(DB::table('hobbies')->where('name', '=','Mineral collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mineral collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Mini Golf')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mini Golf')));}
        if(!(DB::table('hobbies')->where('name', '=','Miniature art')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Miniature art')));}
        if(!(DB::table('hobbies')->where('name', '=','Minimalism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Minimalism')));}
        if(!(DB::table('hobbies')->where('name', '=','Model aircraft')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Model aircraft')));}
        if(!(DB::table('hobbies')->where('name', '=','Model building')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Model building')));}
        if(!(DB::table('hobbies')->where('name', '=','Model engineering')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Model engineering')));}
        if(!(DB::table('hobbies')->where('name', '=','Model racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Model racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Model United Nations')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Model United Nations')));}
        if(!(DB::table('hobbies')->where('name', '=','Motor sports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Motor sports')));}
        if(!(DB::table('hobbies')->where('name', '=','Motorcycling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Motorcycling')));}
        if(!(DB::table('hobbies')->where('name', '=','Mountain biking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mountain biking')));}
        if(!(DB::table('hobbies')->where('name', '=','Mountaineering')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mountaineering')));}
        if(!(DB::table('hobbies')->where('name', '=','Movie memorabilia collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Movie memorabilia collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Museum visiting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Museum visiting')));}
        if(!(DB::table('hobbies')->where('name', '=','Mushroom hunting/mycology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Mushroom hunting/mycology')));}
        if(!(DB::table('hobbies')->where('name', '=','Music')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Music')));}
        if(!(DB::table('hobbies')->where('name', '=','Nail art')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Nail art')));}
        if(!(DB::table('hobbies')->where('name', '=','Needlepoint')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Needlepoint')));}
        if(!(DB::table('hobbies')->where('name', '=','Netball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Netball')));}
        if(!(DB::table('hobbies')->where('name', '=','Noodling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Noodling')));}
        if(!(DB::table('hobbies')->where('name', '=','Nordic skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Nordic skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Orienteering')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Orienteering')));}
        if(!(DB::table('hobbies')->where('name', '=','Orienteering')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Orienteering')));}
        if(!(DB::table('hobbies')->where('name', '=','Origami')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Origami')));}
        if(!(DB::table('hobbies')->where('name', '=','Paintball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Paintball')));}
        if(!(DB::table('hobbies')->where('name', '=','Painting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Painting')));}
        if(!(DB::table('hobbies')->where('name', '=','Palmistry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Palmistry')));}
        if(!(DB::table('hobbies')->where('name', '=','Paragliding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Paragliding')));}
        if(!(DB::table('hobbies')->where('name', '=','Parkour')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Parkour')));}
        if(!(DB::table('hobbies')->where('name', '=','People-watching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'People-watching')));}
        if(!(DB::table('hobbies')->where('name', '=','Performance')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Performance')));}
        if(!(DB::table('hobbies')->where('name', '=','Perfume')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Perfume')));}
        if(!(DB::table('hobbies')->where('name', '=','Pet')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pet')));}
        if(!(DB::table('hobbies')->where('name', '=','Pet adoption & fostering')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pet adoption & fostering')));}
        if(!(DB::table('hobbies')->where('name', '=','Pet sitting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pet sitting')));}
        if(!(DB::table('hobbies')->where('name', '=','Philately')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Philately')));}
        if(!(DB::table('hobbies')->where('name', '=','Phillumeny')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Phillumeny')));}
        if(!(DB::table('hobbies')->where('name', '=','Philosophy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Philosophy')));}
        if(!(DB::table('hobbies')->where('name', '=','Photography')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Photography')));}
        if(!(DB::table('hobbies')->where('name', '=','Physics')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Physics')));}
        if(!(DB::table('hobbies')->where('name', '=','Pickleball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pickleball')));}
        if(!(DB::table('hobbies')->where('name', '=','Picnicking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Picnicking')));}
        if(!(DB::table('hobbies')->where('name', '=','Pilates')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pilates')));}
        if(!(DB::table('hobbies')->where('name', '=','Pin (lapel)')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pin (lapel)')));}
        if(!(DB::table('hobbies')->where('name', '=','Planning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Planning')));}
        if(!(DB::table('hobbies')->where('name', '=','Plastic art')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Plastic art')));}
        if(!(DB::table('hobbies')->where('name', '=','Playing musical instruments')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Playing musical instruments')));}
        if(!(DB::table('hobbies')->where('name', '=','Podcast hosting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Podcast hosting')));}
        if(!(DB::table('hobbies')->where('name', '=','Poetry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Poetry')));}
        if(!(DB::table('hobbies')->where('name', '=','Poi')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Poi')));}
        if(!(DB::table('hobbies')->where('name', '=','Poker')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Poker')));}
        if(!(DB::table('hobbies')->where('name', '=','Pole dancing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pole dancing')));}
        if(!(DB::table('hobbies')->where('name', '=','Pool')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pool')));}
        if(!(DB::table('hobbies')->where('name', '=','Postcrossing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Postcrossing')));}
        if(!(DB::table('hobbies')->where('name', '=','Pottery')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pottery')));}
        if(!(DB::table('hobbies')->where('name', '=','Powerboat racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Powerboat racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Powerlifting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Powerlifting')));}
        if(!(DB::table('hobbies')->where('name', '=','Practical jokes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Practical jokes')));}
        if(!(DB::table('hobbies')->where('name', '=','Pressed flower craft')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pressed flower craft')));}
        if(!(DB::table('hobbies')->where('name', '=','Proofreading and editing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Proofreading and editing')));}
        if(!(DB::table('hobbies')->where('name', '=','Proverbs')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Proverbs')));}
        if(!(DB::table('hobbies')->where('name', '=','Psychology')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Psychology')));}
        if(!(DB::table('hobbies')->where('name', '=','Public speaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Public speaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Public transport riding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Public transport riding')));}
        if(!(DB::table('hobbies')->where('name', '=','Puppetry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Puppetry')));}
        if(!(DB::table('hobbies')->where('name', '=','Puzzles')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Puzzles')));}
        if(!(DB::table('hobbies')->where('name', '=','Pyrography')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Pyrography')));}
        if(!(DB::table('hobbies')->where('name', '=','Qigong')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Qigong')));}
        if(!(DB::table('hobbies')->where('name', '=','Quidditch')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Quidditch')));}
        if(!(DB::table('hobbies')->where('name', '=','Quilling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Quilling')));}
        if(!(DB::table('hobbies')->where('name', '=','Quilting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Quilting')));}
        if(!(DB::table('hobbies')->where('name', '=','Quizzes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Quizzes')));}
        if(!(DB::table('hobbies')->where('name', '=','Race walking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Race walking')));}
        if(!(DB::table('hobbies')->where('name', '=','Racquetball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Racquetball')));}
        if(!(DB::table('hobbies')->where('name', '=','Radio-controlled car racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Radio-controlled car racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Radio-controlled model collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Radio-controlled model collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Radio-controlled model playing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Radio-controlled model playing')));}
        if(!(DB::table('hobbies')->where('name', '=','Rafting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rafting')));}
        if(!(DB::table('hobbies')->where('name', '=','Rail transport modeling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rail transport modeling')));}
        if(!(DB::table('hobbies')->where('name', '=','Railway journeys')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Railway journeys')));}
        if(!(DB::table('hobbies')->where('name', '=','Railway studies')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Railway studies')));}
        if(!(DB::table('hobbies')->where('name', '=','Rappelling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rappelling')));}
        if(!(DB::table('hobbies')->where('name', '=','Rapping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rapping')));}
        if(!(DB::table('hobbies')->where('name', '=','Reading')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Reading')));}
        if(!(DB::table('hobbies')->where('name', '=','Reading')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Reading')));}
        if(!(DB::table('hobbies')->where('name', '=','Recipe creation')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Recipe creation')));}
        if(!(DB::table('hobbies')->where('name', '=','Record collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Record collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Refinishing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Refinishing')));}
        if(!(DB::table('hobbies')->where('name', '=','Reiki')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Reiki')));}
        if(!(DB::table('hobbies')->where('name', '=','Renaissance fair')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Renaissance fair')));}
        if(!(DB::table('hobbies')->where('name', '=','Renovating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Renovating')));}
        if(!(DB::table('hobbies')->where('name', '=','Research')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Research')));}
        if(!(DB::table('hobbies')->where('name', '=','Reviewing Gadgets')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Reviewing Gadgets')));}
        if(!(DB::table('hobbies')->where('name', '=','Road biking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Road biking')));}
        if(!(DB::table('hobbies')->where('name', '=','Robot combat')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Robot combat')));}
        if(!(DB::table('hobbies')->where('name', '=','Rock balancing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rock balancing')));}
        if(!(DB::table('hobbies')->where('name', '=','Rock climbing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rock climbing')));}
        if(!(DB::table('hobbies')->where('name', '=','Rock painting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rock painting')));}
        if(!(DB::table('hobbies')->where('name', '=','Rock tumbling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rock tumbling')));}
        if(!(DB::table('hobbies')->where('name', '=','Role-playing games')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Role-playing games')));}
        if(!(DB::table('hobbies')->where('name', '=','Roller derby')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Roller derby')));}
        if(!(DB::table('hobbies')->where('name', '=','Roller skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Roller skating')));}
        if(!(DB::table('hobbies')->where('name', '=',"Rubik's Cube")->exists())){ DB::table('hobbies')->insert(array(array('name' =>"Rubik's Cube")));}
        if(!(DB::table('hobbies')->where('name', '=','Rugby league football')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rugby league football')));}
        if(!(DB::table('hobbies')->where('name', '=','Rugby')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Rugby')));}
        if(!(DB::table('hobbies')->where('name', '=','Running')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Running')));}
        if(!(DB::table('hobbies')->where('name', '=','Sailing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sailing')));}
        if(!(DB::table('hobbies')->where('name', '=','Sand art')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sand art')));}
        if(!(DB::table('hobbies')->where('name', '=','Satellite watching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Satellite watching')));}
        if(!(DB::table('hobbies')->where('name', '=','Science and technology studies')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Science and technology studies')));}
        if(!(DB::table('hobbies')->where('name', '=','Scouting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Scouting')));}
        if(!(DB::table('hobbies')->where('name', '=','Scrapbooking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Scrapbooking')));}
        if(!(DB::table('hobbies')->where('name', '=','SCUBA Diving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'SCUBA Diving')));}
        if(!(DB::table('hobbies')->where('name', '=','Scuba diving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Scuba diving')));}
        if(!(DB::table('hobbies')->where('name', '=','Sculling or rowing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sculling or rowing')));}
        if(!(DB::table('hobbies')->where('name', '=','Sculpting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sculpting')));}
        if(!(DB::table('hobbies')->where('name', '=','Scutelliphily')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Scutelliphily')));}
        if(!(DB::table('hobbies')->where('name', '=','Sea glass collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sea glass collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Seashell collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Seashell collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Sewing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sewing')));}
        if(!(DB::table('hobbies')->where('name', '=','Shoemaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shoemaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Shoes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shoes')));}
        if(!(DB::table('hobbies')->where('name', '=','Shogi')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shogi')));}
        if(!(DB::table('hobbies')->where('name', '=','Shooting sport')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shooting sport')));}
        if(!(DB::table('hobbies')->where('name', '=','Shooting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shooting')));}
        if(!(DB::table('hobbies')->where('name', '=','Shopping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shopping')));}
        if(!(DB::table('hobbies')->where('name', '=','Shortwave listening')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shortwave listening')));}
        if(!(DB::table('hobbies')->where('name', '=','Shuffleboard')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Shuffleboard')));}
        if(!(DB::table('hobbies')->where('name', '=','Singing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Singing')));}
        if(!(DB::table('hobbies')->where('name', '=','Skateboarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Skateboarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Sketching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sketching')));}
        if(!(DB::table('hobbies')->where('name', '=','Skiing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Skiing')));}
        if(!(DB::table('hobbies')->where('name', '=','Skimboarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Skimboarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Skipping rope')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Skipping rope')));}
        if(!(DB::table('hobbies')->where('name', '=','Skydiving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Skydiving')));}
        if(!(DB::table('hobbies')->where('name', '=','Slacklining')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Slacklining')));}
        if(!(DB::table('hobbies')->where('name', '=','Sled dog racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sled dog racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Sledding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sledding')));}
        if(!(DB::table('hobbies')->where('name', '=','Slot car')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Slot car')));}
        if(!(DB::table('hobbies')->where('name', '=','Slot car')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Slot car')));}
        if(!(DB::table('hobbies')->where('name', '=','Slot car racing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Slot car racing')));}
        if(!(DB::table('hobbies')->where('name', '=','Snorkeling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Snorkeling')));}
        if(!(DB::table('hobbies')->where('name', '=','Snowboarding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Snowboarding')));}
        if(!(DB::table('hobbies')->where('name', '=','Snowmobiling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Snowmobiling')));}
        if(!(DB::table('hobbies')->where('name', '=','Snowshoeing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Snowshoeing')));}
        if(!(DB::table('hobbies')->where('name', '=','Soapmaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Soapmaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Soccer')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Soccer')));}
        if(!(DB::table('hobbies')->where('name', '=','Social media')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Social media')));}
        if(!(DB::table('hobbies')->where('name', '=','Social studies')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Social studies')));}
        if(!(DB::table('hobbies')->where('name', '=','Softball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Softball')));}
        if(!(DB::table('hobbies')->where('name', '=','Speed skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Speed skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Speedcubing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Speedcubing')));}
        if(!(DB::table('hobbies')->where('name', '=','Sport stacking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sport stacking')));}
        if(!(DB::table('hobbies')->where('name', '=','Sports memorabilia')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sports memorabilia')));}
        if(!(DB::table('hobbies')->where('name', '=','Sports science')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sports science')));}
        if(!(DB::table('hobbies')->where('name', '=','Spreadsheets')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Spreadsheets')));}
        if(!(DB::table('hobbies')->where('name', '=','Squash')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Squash')));}
        if(!(DB::table('hobbies')->where('name', '=','Stamp collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stamp collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Stamp collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stamp collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Stand-up comedy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stand-up comedy')));}
        if(!(DB::table('hobbies')->where('name', '=','Stone collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stone collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Stone skipping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stone skipping')));}
        if(!(DB::table('hobbies')->where('name', '=','Storm chasing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Storm chasing')));}
        if(!(DB::table('hobbies')->where('name', '=','Storytelling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Storytelling')));}
        if(!(DB::table('hobbies')->where('name', '=','Stripping')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stripping')));}
        if(!(DB::table('hobbies')->where('name', '=','Stuffed toy collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Stuffed toy collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Sudoku')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sudoku')));}
        if(!(DB::table('hobbies')->where('name', '=','Sun bathing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Sun bathing')));}
        if(!(DB::table('hobbies')->where('name', '=','Surfing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Surfing')));}
        if(!(DB::table('hobbies')->where('name', '=','Survivalism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Survivalism')));}
        if(!(DB::table('hobbies')->where('name', '=','Swimming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Swimming')));}
        if(!(DB::table('hobbies')->where('name', '=','Table football')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Table football')));}
        if(!(DB::table('hobbies')->where('name', '=','Table tennis')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Table tennis')));}
        if(!(DB::table('hobbies')->where('name', '=','Taekwondo')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Taekwondo')));}
        if(!(DB::table('hobbies')->where('name', '=','Tai chi')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tai chi')));}
        if(!(DB::table('hobbies')->where('name', '=','Tapestry')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tapestry')));}
        if(!(DB::table('hobbies')->where('name', '=','Tarot')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tarot')));}
        if(!(DB::table('hobbies')->where('name', '=','Tatebanko')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tatebanko')));}
        if(!(DB::table('hobbies')->where('name', '=','Tattooing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tattooing')));}
        if(!(DB::table('hobbies')->where('name', '=','Taxidermy')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Taxidermy')));}
        if(!(DB::table('hobbies')->where('name', '=','Tea bag collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tea bag collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Teaching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Teaching')));}
        if(!(DB::table('hobbies')->where('name', '=','Telling jokes')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Telling jokes')));}
        if(!(DB::table('hobbies')->where('name', '=','Tennis')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tennis')));}
        if(!(DB::table('hobbies')->where('name', '=','Tennis polo')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tennis polo')));}
        if(!(DB::table('hobbies')->where('name', '=','Tether car')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tether car')));}
        if(!(DB::table('hobbies')->where('name', '=','Thrifting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Thrifting')));}
        if(!(DB::table('hobbies')->where('name', '=','Thru-hiking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Thru-hiking')));}
        if(!(DB::table('hobbies')->where('name', '=','Ticket collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ticket collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Topiary')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Topiary')));}
        if(!(DB::table('hobbies')->where('name', '=','Tour skating')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tour skating')));}
        if(!(DB::table('hobbies')->where('name', '=','Tourism')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Tourism')));}
        if(!(DB::table('hobbies')->where('name', '=','Toys')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Toys')));}
        if(!(DB::table('hobbies')->where('name', '=','Trade fair visiting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Trade fair visiting')));}
        if(!(DB::table('hobbies')->where('name', '=','Trainspotting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Trainspotting')));}
        if(!(DB::table('hobbies')->where('name', '=','Transit map collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Transit map collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Trapshooting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Trapshooting')));}
        if(!(DB::table('hobbies')->where('name', '=','Travel')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Travel')));}
        if(!(DB::table('hobbies')->where('name', '=','Triathlon[')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Triathlon[')));}
        if(!(DB::table('hobbies')->where('name', '=','Ultimate frisbee')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Ultimate frisbee')));}
        if(!(DB::table('hobbies')->where('name', '=','Upcycling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Upcycling')));}
        if(!(DB::table('hobbies')->where('name', '=','Urban exploration')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Urban exploration')));}
        if(!(DB::table('hobbies')->where('name', '=','Vacation')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Vacation')));}
        if(!(DB::table('hobbies')->where('name', '=','Vegetable farming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Vegetable farming')));}
        if(!(DB::table('hobbies')->where('name', '=','Vehicle restoration')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Vehicle restoration')));}
        if(!(DB::table('hobbies')->where('name', '=','Video editing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Video editing')));}
        if(!(DB::table('hobbies')->where('name', '=','Video game collecting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Video game collecting')));}
        if(!(DB::table('hobbies')->where('name', '=','Video game developing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Video game developing')));}
        if(!(DB::table('hobbies')->where('name', '=','Video gaming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Video gaming')));}
        if(!(DB::table('hobbies')->where('name', '=','Video making')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Video making')));}
        if(!(DB::table('hobbies')->where('name', '=','Videography')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Videography')));}
        if(!(DB::table('hobbies')->where('name', '=','Vintage cars')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Vintage cars')));}
        if(!(DB::table('hobbies')->where('name', '=','Vintage clothing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Vintage clothing')));}
        if(!(DB::table('hobbies')->where('name', '=','Vinyl Records')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Vinyl Records')));}
        if(!(DB::table('hobbies')->where('name', '=','Volleyball')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Volleyball')));}
        if(!(DB::table('hobbies')->where('name', '=','Volunteering')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Volunteering')));}
        if(!(DB::table('hobbies')->where('name', '=','VR Gaming')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'VR Gaming')));}
        if(!(DB::table('hobbies')->where('name', '=','Walking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Walking')));}
        if(!(DB::table('hobbies')->where('name', '=','Watching documentaries')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Watching documentaries')));}
        if(!(DB::table('hobbies')->where('name', '=','Watching movies')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Watching movies')));}
        if(!(DB::table('hobbies')->where('name', '=','Watching television')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Watching television')));}
        if(!(DB::table('hobbies')->where('name', '=','Water polo')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Water polo')));}
        if(!(DB::table('hobbies')->where('name', '=','Water sports')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Water sports')));}
        if(!(DB::table('hobbies')->where('name', '=','Waxing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Waxing')));}
        if(!(DB::table('hobbies')->where('name', '=','Weaving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Weaving')));}
        if(!(DB::table('hobbies')->where('name', '=','Web design')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Web design')));}
        if(!(DB::table('hobbies')->where('name', '=','Webtooning')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Webtooning')));}
        if(!(DB::table('hobbies')->where('name', '=','Weight training')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Weight training')));}
        if(!(DB::table('hobbies')->where('name', '=','Welding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Welding')));}
        if(!(DB::table('hobbies')->where('name', '=','Whale watching')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Whale watching')));}
        if(!(DB::table('hobbies')->where('name', '=','Whittling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Whittling')));}
        if(!(DB::table('hobbies')->where('name', '=','Wikipedia editing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Wikipedia editing')));}
        if(!(DB::table('hobbies')->where('name', '=','Wine tasting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Wine tasting')));}
        if(!(DB::table('hobbies')->where('name', '=','Winemaking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Winemaking')));}
        if(!(DB::table('hobbies')->where('name', '=','Wood carving')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Wood carving')));}
        if(!(DB::table('hobbies')->where('name', '=','Woodworking')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Woodworking')));}
        if(!(DB::table('hobbies')->where('name', '=','Word searches')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Word searches')));}
        if(!(DB::table('hobbies')->where('name', '=','Worldbuilding')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Worldbuilding')));}
        if(!(DB::table('hobbies')->where('name', '=','Wrestling')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Wrestling')));}
        if(!(DB::table('hobbies')->where('name', '=','Writing music')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Writing music')));}
        if(!(DB::table('hobbies')->where('name', '=','Writing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Writing')));}
        if(!(DB::table('hobbies')->where('name', '=','Yo-yoing')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Yo-yoing')));}
        if(!(DB::table('hobbies')->where('name', '=','Yoga')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Yoga')));}
        if(!(DB::table('hobbies')->where('name', '=','Zoo visiting')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Zoo visiting')));}
        if(!(DB::table('hobbies')->where('name', '=','Zumba')->exists())){ DB::table('hobbies')->insert(array(array('name' =>'Zumba')));}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('hobbies')->where('name', '=', '3D printing')->delete();
        DB::table('hobbies')->where('name', '=', 'Acroyoga')->delete();
        DB::table('hobbies')->where('name', '=', 'Acting')->delete();
        DB::table('hobbies')->where('name', '=', 'Action figure')->delete();
        DB::table('hobbies')->where('name', '=', 'Aerial silk')->delete();
        DB::table('hobbies')->where('name', '=', 'Air sports')->delete();
        DB::table('hobbies')->where('name', '=', 'Airbrushing')->delete();
        DB::table('hobbies')->where('name', '=', 'Aircraft spotting')->delete();
        DB::table('hobbies')->where('name', '=', 'Airsoft')->delete();
        DB::table('hobbies')->where('name', '=', 'Amateur astronomy')->delete();
        DB::table('hobbies')->where('name', '=', 'Amateur geology')->delete();
        DB::table('hobbies')->where('name', '=', 'Amateur radio')->delete();
        DB::table('hobbies')->where('name', '=', 'Amusement park visiting')->delete();
        DB::table('hobbies')->where('name', '=', 'Animal fancy')->delete();
        DB::table('hobbies')->where('name', '=', 'Animation')->delete();
        DB::table('hobbies')->where('name', '=', 'Antiquing')->delete();
        DB::table('hobbies')->where('name', '=', 'Antiquities')->delete();
        DB::table('hobbies')->where('name', '=', 'Ant-keeping')->delete();
        DB::table('hobbies')->where('name', '=', 'Aquascaping')->delete();
        DB::table('hobbies')->where('name', '=', 'Archaeology')->delete();
        DB::table('hobbies')->where('name', '=', 'Archery')->delete();
        DB::table('hobbies')->where('name', '=', 'Art')->delete();
        DB::table('hobbies')->where('name', '=', 'Art collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Association football')->delete();
        DB::table('hobbies')->where('name', '=', 'Astrology')->delete();
        DB::table('hobbies')->where('name', '=', 'Astronomy')->delete();
        DB::table('hobbies')->where('name', '=', 'Astronomy')->delete();
        DB::table('hobbies')->where('name', '=', 'Audiophile')->delete();
        DB::table('hobbies')->where('name', '=', 'Australian rules football')->delete();
        DB::table('hobbies')->where('name', '=', 'Auto audiophilia')->delete();
        DB::table('hobbies')->where('name', '=', 'Auto detailing')->delete();
        DB::table('hobbies')->where('name', '=', 'Auto racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Automobilism')->delete();
        DB::table('hobbies')->where('name', '=', 'Axe throwing')->delete();
        DB::table('hobbies')->where('name', '=', 'Babysitting')->delete();
        DB::table('hobbies')->where('name', '=', 'Backgammon')->delete();
        DB::table('hobbies')->where('name', '=', 'Backpacking')->delete();
        DB::table('hobbies')->where('name', '=', 'Badminton')->delete();
        DB::table('hobbies')->where('name', '=', 'Badminton')->delete();
        DB::table('hobbies')->where('name', '=', 'Baking')->delete();
        DB::table('hobbies')->where('name', '=', 'BASE jumping')->delete();
        DB::table('hobbies')->where('name', '=', 'Baseball')->delete();
        DB::table('hobbies')->where('name', '=', 'Baseball')->delete();
        DB::table('hobbies')->where('name', '=', 'Basketball')->delete();
        DB::table('hobbies')->where('name', '=', 'Baton twirling')->delete();
        DB::table('hobbies')->where('name', '=', 'Beach volleyball')->delete();
        DB::table('hobbies')->where('name', '=', 'Beachcombing')->delete();
        DB::table('hobbies')->where('name', '=', 'Beatboxing')->delete();
        DB::table('hobbies')->where('name', '=', 'Beauty pageants')->delete();
        DB::table('hobbies')->where('name', '=', 'Beekeeping')->delete();
        DB::table('hobbies')->where('name', '=', 'Beer tasting')->delete();
        DB::table('hobbies')->where('name', '=', 'Benchmarking')->delete();
        DB::table('hobbies')->where('name', '=', 'Billiards')->delete();
        DB::table('hobbies')->where('name', '=', 'Binge-watching')->delete();
        DB::table('hobbies')->where('name', '=', 'Biology')->delete();
        DB::table('hobbies')->where('name', '=', 'Birdwatching')->delete();
        DB::table('hobbies')->where('name', '=', 'Blacksmithing')->delete();
        DB::table('hobbies')->where('name', '=', 'Blogging')->delete();
        DB::table('hobbies')->where('name', '=', 'BMX')->delete();
        DB::table('hobbies')->where('name', '=', 'Board sports')->delete();
        DB::table('hobbies')->where('name', '=', 'Board/tabletop games')->delete();
        DB::table('hobbies')->where('name', '=', 'Bodybuilding')->delete();
        DB::table('hobbies')->where('name', '=', 'Bonsai')->delete();
        DB::table('hobbies')->where('name', '=', 'Book collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Book discussion clubs')->delete();
        DB::table('hobbies')->where('name', '=', 'Book restoration')->delete();
        DB::table('hobbies')->where('name', '=', 'Bowling')->delete();
        DB::table('hobbies')->where('name', '=', 'Boxing')->delete();
        DB::table('hobbies')->where('name', '=', 'Brazilian jiu-jitsu')->delete();
        DB::table('hobbies')->where('name', '=', 'Breadmaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Breakdancing')->delete();
        DB::table('hobbies')->where('name', '=', 'Bridge')->delete();
        DB::table('hobbies')->where('name', '=', 'Building')->delete();
        DB::table('hobbies')->where('name', '=', 'Bullet journaling')->delete();
        DB::table('hobbies')->where('name', '=', 'Bus riding')->delete();
        DB::table('hobbies')->where('name', '=', 'Bus spotting')->delete();
        DB::table('hobbies')->where('name', '=', 'Butterfly watching')->delete();
        DB::table('hobbies')->where('name', '=', 'Button collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Cabaret')->delete();
        DB::table('hobbies')->where('name', '=', 'Calligraphy')->delete();
        DB::table('hobbies')->where('name', '=', 'Camping')->delete();
        DB::table('hobbies')->where('name', '=', 'Candle making')->delete();
        DB::table('hobbies')->where('name', '=', 'Candy making')->delete();
        DB::table('hobbies')->where('name', '=', 'Canoeing')->delete();
        DB::table('hobbies')->where('name', '=', 'Canyoning')->delete();
        DB::table('hobbies')->where('name', '=', 'Car fixing & building')->delete();
        DB::table('hobbies')->where('name', '=', 'Car riding')->delete();
        DB::table('hobbies')->where('name', '=', 'Car tuning')->delete();
        DB::table('hobbies')->where('name', '=', 'Card games')->delete();
        DB::table('hobbies')->where('name', '=', 'Cardistry')->delete();
        DB::table('hobbies')->where('name', '=', 'Cartophily (card collecting)')->delete();
        DB::table('hobbies')->where('name', '=', 'Caving')->delete();
        DB::table('hobbies')->where('name', '=', 'Ceramics')->delete();
        DB::table('hobbies')->where('name', '=', 'Chatting')->delete();
        DB::table('hobbies')->where('name', '=', 'Checkers (draughts)')->delete();
        DB::table('hobbies')->where('name', '=', 'Cheerleading')->delete();
        DB::table('hobbies')->where('name', '=', 'Cheesemaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Chemistry')->delete();
        DB::table('hobbies')->where('name', '=', 'Chess')->delete();
        DB::table('hobbies')->where('name', '=', 'Chess')->delete();
        DB::table('hobbies')->where('name', '=', 'City trip')->delete();
        DB::table('hobbies')->where('name', '=', 'Cleaning')->delete();
        DB::table('hobbies')->where('name', '=', 'Climbing')->delete();
        DB::table('hobbies')->where('name', '=', 'Clothesmaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Coffee roasting')->delete();
        DB::table('hobbies')->where('name', '=', 'Coin collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Color guard')->delete();
        DB::table('hobbies')->where('name', '=', 'Coloring')->delete();
        DB::table('hobbies')->where('name', '=', 'Comic book collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Communication')->delete();
        DB::table('hobbies')->where('name', '=', 'Community activism')->delete();
        DB::table('hobbies')->where('name', '=', 'Compact discs')->delete();
        DB::table('hobbies')->where('name', '=', 'Composting')->delete();
        DB::table('hobbies')->where('name', '=', 'Computer programming')->delete();
        DB::table('hobbies')->where('name', '=', 'Confectionery')->delete();
        DB::table('hobbies')->where('name', '=', 'Construction')->delete();
        DB::table('hobbies')->where('name', '=', 'Cooking')->delete();
        DB::table('hobbies')->where('name', '=', 'Cornhole')->delete();
        DB::table('hobbies')->where('name', '=', 'Cosplaying')->delete();
        DB::table('hobbies')->where('name', '=', 'Couch surfing')->delete();
        DB::table('hobbies')->where('name', '=', 'Couponing')->delete();
        DB::table('hobbies')->where('name', '=', 'Craft')->delete();
        DB::table('hobbies')->where('name', '=', 'Creative writing')->delete();
        DB::table('hobbies')->where('name', '=', 'Credit card')->delete();
        DB::table('hobbies')->where('name', '=', 'Cribbage')->delete();
        DB::table('hobbies')->where('name', '=', 'Cricket')->delete();
        DB::table('hobbies')->where('name', '=', 'Crocheting')->delete();
        DB::table('hobbies')->where('name', '=', 'Croquet')->delete();
        DB::table('hobbies')->where('name', '=', 'Cross-stitch')->delete();
        DB::table('hobbies')->where('name', '=', 'Crossword puzzles')->delete();
        DB::table('hobbies')->where('name', '=', 'Cryptography')->delete();
        DB::table('hobbies')->where('name', '=', 'Cue sports')->delete();
        DB::table('hobbies')->where('name', '=', 'Curling')->delete();
        DB::table('hobbies')->where('name', '=', 'Cycling')->delete();
        DB::table('hobbies')->where('name', '=', 'Dancing')->delete();
        DB::table('hobbies')->where('name', '=', 'Dandyism')->delete();
        DB::table('hobbies')->where('name', '=', 'Darts')->delete();
        DB::table('hobbies')->where('name', '=', 'Debate')->delete();
        DB::table('hobbies')->where('name', '=', 'Decorating')->delete();
        DB::table('hobbies')->where('name', '=', 'Deltiology (postcard collecting)')->delete();
        DB::table('hobbies')->where('name', '=', 'Die-cast toy')->delete();
        DB::table('hobbies')->where('name', '=', 'Digital arts')->delete();
        DB::table('hobbies')->where('name', '=', 'Digital hoarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Dining')->delete();
        DB::table('hobbies')->where('name', '=', 'Diorama')->delete();
        DB::table('hobbies')->where('name', '=', 'Disc golf')->delete();
        DB::table('hobbies')->where('name', '=', 'Distro Hopping')->delete();
        DB::table('hobbies')->where('name', '=', 'Diving')->delete();
        DB::table('hobbies')->where('name', '=', 'Djembe')->delete();
        DB::table('hobbies')->where('name', '=', 'DJing')->delete();
        DB::table('hobbies')->where('name', '=', 'Do it yourself')->delete();
        DB::table('hobbies')->where('name', '=', 'Dog sport')->delete();
        DB::table('hobbies')->where('name', '=', 'Dog training')->delete();
        DB::table('hobbies')->where('name', '=', 'Dog walking')->delete();
        DB::table('hobbies')->where('name', '=', 'Dolls')->delete();
        DB::table('hobbies')->where('name', '=', 'Dominoes')->delete();
        DB::table('hobbies')->where('name', '=', 'Dowsing')->delete();
        DB::table('hobbies')->where('name', '=', 'Drama')->delete();
        DB::table('hobbies')->where('name', '=', 'Drawing')->delete();
        DB::table('hobbies')->where('name', '=', 'Drink mixing')->delete();
        DB::table('hobbies')->where('name', '=', 'Drinking')->delete();
        DB::table('hobbies')->where('name', '=', 'Driving')->delete();
        DB::table('hobbies')->where('name', '=', 'Eating')->delete();
        DB::table('hobbies')->where('name', '=', 'Electrochemistry')->delete();
        DB::table('hobbies')->where('name', '=', 'Electronic games')->delete();
        DB::table('hobbies')->where('name', '=', 'Electronics')->delete();
        DB::table('hobbies')->where('name', '=', 'Element collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Embroidery')->delete();
        DB::table('hobbies')->where('name', '=', 'Engraving')->delete();
        DB::table('hobbies')->where('name', '=', 'Entertaining')->delete();
        DB::table('hobbies')->where('name', '=', 'Ephemera collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Equestrianism')->delete();
        DB::table('hobbies')->where('name', '=', 'Esports')->delete();
        DB::table('hobbies')->where('name', '=', 'Exhibition drill')->delete();
        DB::table('hobbies')->where('name', '=', 'Experimenting')->delete();
        DB::table('hobbies')->where('name', '=', 'Fantasy sports')->delete();
        DB::table('hobbies')->where('name', '=', 'Farming')->delete();
        DB::table('hobbies')->where('name', '=', 'Fashion')->delete();
        DB::table('hobbies')->where('name', '=', 'Fashion design')->delete();
        DB::table('hobbies')->where('name', '=', 'Fencing')->delete();
        DB::table('hobbies')->where('name', '=', 'Feng shui decorating')->delete();
        DB::table('hobbies')->where('name', '=', 'Field hockey')->delete();
        DB::table('hobbies')->where('name', '=', 'Figure skating[30]')->delete();
        DB::table('hobbies')->where('name', '=', 'Filmmaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Films')->delete();
        DB::table('hobbies')->where('name', '=', 'Fingerpainting')->delete();
        DB::table('hobbies')->where('name', '=', 'Fingerprint collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Fishfarming')->delete();
        DB::table('hobbies')->where('name', '=', 'Fishing')->delete();
        DB::table('hobbies')->where('name', '=', 'Fishkeeping')->delete();
        DB::table('hobbies')->where('name', '=', 'Fitness')->delete();
        DB::table('hobbies')->where('name', '=', 'Flag football')->delete();
        DB::table('hobbies')->where('name', '=', 'Flower arranging')->delete();
        DB::table('hobbies')->where('name', '=', 'Flower collecting and pressing[')->delete();
        DB::table('hobbies')->where('name', '=', 'Flower growing')->delete();
        DB::table('hobbies')->where('name', '=', 'Fly tying')->delete();
        DB::table('hobbies')->where('name', '=', 'Flying disc')->delete();
        DB::table('hobbies')->where('name', '=', 'Flying model planes')->delete();
        DB::table('hobbies')->where('name', '=', 'Flying')->delete();
        DB::table('hobbies')->where('name', '=', 'Footbag')->delete();
        DB::table('hobbies')->where('name', '=', 'Foraging')->delete();
        DB::table('hobbies')->where('name', '=', 'Foreign language learning')->delete();
        DB::table('hobbies')->where('name', '=', 'Fossicking')->delete();
        DB::table('hobbies')->where('name', '=', 'Fossil hunting')->delete();
        DB::table('hobbies')->where('name', '=', 'Freestyle football')->delete();
        DB::table('hobbies')->where('name', '=', 'Frisbee')->delete();
        DB::table('hobbies')->where('name', '=', 'Fruit picking')->delete();
        DB::table('hobbies')->where('name', '=', 'Furniture building')->delete();
        DB::table('hobbies')->where('name', '=', 'Fusilately (phonecard collecting)')->delete();
        DB::table('hobbies')->where('name', '=', 'Gardening')->delete();
        DB::table('hobbies')->where('name', '=', 'Genealogy')->delete();
        DB::table('hobbies')->where('name', '=', 'Geocaching')->delete();
        DB::table('hobbies')->where('name', '=', 'Geography')->delete();
        DB::table('hobbies')->where('name', '=', 'Ghost hunting')->delete();
        DB::table('hobbies')->where('name', '=', 'Gingerbread house making')->delete();
        DB::table('hobbies')->where('name', '=', 'Giving advice')->delete();
        DB::table('hobbies')->where('name', '=', 'Glassblowing')->delete();
        DB::table('hobbies')->where('name', '=', 'Go')->delete();
        DB::table('hobbies')->where('name', '=', 'Gold prospecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Golfing')->delete();
        DB::table('hobbies')->where('name', '=', 'Gongoozling')->delete();
        DB::table('hobbies')->where('name', '=', 'Graffiti')->delete();
        DB::table('hobbies')->where('name', '=', 'Graphic design')->delete();
        DB::table('hobbies')->where('name', '=', 'Groundhopping')->delete();
        DB::table('hobbies')->where('name', '=', 'Guerrilla gardening')->delete();
        DB::table('hobbies')->where('name', '=', 'Gunsmithing')->delete();
        DB::table('hobbies')->where('name', '=', 'Gymnastics')->delete();
        DB::table('hobbies')->where('name', '=', 'Gymnastics')->delete();
        DB::table('hobbies')->where('name', '=', 'Hacking')->delete();
        DB::table('hobbies')->where('name', '=', 'Handball')->delete();
        DB::table('hobbies')->where('name', '=', 'Hardware')->delete();
        DB::table('hobbies')->where('name', '=', 'Herbalism')->delete();
        DB::table('hobbies')->where('name', '=', 'Herp keeping')->delete();
        DB::table('hobbies')->where('name', '=', 'Herping')->delete();
        DB::table('hobbies')->where('name', '=', 'Herping')->delete();
        DB::table('hobbies')->where('name', '=', 'High-power rocketry')->delete();
        DB::table('hobbies')->where('name', '=', 'Hiking')->delete();
        DB::table('hobbies')->where('name', '=', 'Hiking/backpacking')->delete();
        DB::table('hobbies')->where('name', '=', 'History')->delete();
        DB::table('hobbies')->where('name', '=', 'Hobby horsing')->delete();
        DB::table('hobbies')->where('name', '=', 'Hobby tunneling')->delete();
        DB::table('hobbies')->where('name', '=', 'Home improvement')->delete();
        DB::table('hobbies')->where('name', '=', 'Homebrewing')->delete();
        DB::table('hobbies')->where('name', '=', 'Hooping')->delete();
        DB::table('hobbies')->where('name', '=', 'Horseback riding')->delete();
        DB::table('hobbies')->where('name', '=', 'Horseback riding')->delete();
        DB::table('hobbies')->where('name', '=', 'Horsemanship')->delete();
        DB::table('hobbies')->where('name', '=', 'Horseshoes')->delete();
        DB::table('hobbies')->where('name', '=', 'Houseplant care')->delete();
        DB::table('hobbies')->where('name', '=', 'Hula hooping')->delete();
        DB::table('hobbies')->where('name', '=', 'Humor')->delete();
        DB::table('hobbies')->where('name', '=', 'Hunting')->delete();
        DB::table('hobbies')->where('name', '=', 'Hydroponics')->delete();
        DB::table('hobbies')->where('name', '=', 'Ice hockey')->delete();
        DB::table('hobbies')->where('name', '=', 'Ice skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Ice skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Iceboat racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Indoors[edit]')->delete();
        DB::table('hobbies')->where('name', '=', 'Inline skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Insect collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Inventing')->delete();
        DB::table('hobbies')->where('name', '=', 'Jewelry making')->delete();
        DB::table('hobbies')->where('name', '=', 'Jigsaw puzzles')->delete();
        DB::table('hobbies')->where('name', '=', 'Jogging')->delete();
        DB::table('hobbies')->where('name', '=', 'Journaling')->delete();
        DB::table('hobbies')->where('name', '=', 'Judo')->delete();
        DB::table('hobbies')->where('name', '=', 'Juggling')->delete();
        DB::table('hobbies')->where('name', '=', 'Jujitsu')->delete();
        DB::table('hobbies')->where('name', '=', 'Jukskei')->delete();
        DB::table('hobbies')->where('name', '=', 'Jumping rope')->delete();
        DB::table('hobbies')->where('name', '=', 'Kabaddi')->delete();
        DB::table('hobbies')->where('name', '=', 'Karaoke')->delete();
        DB::table('hobbies')->where('name', '=', 'Karate')->delete();
        DB::table('hobbies')->where('name', '=', 'Kart racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Karting')->delete();
        DB::table('hobbies')->where('name', '=', 'Kayaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Kendama')->delete();
        DB::table('hobbies')->where('name', '=', 'Kite flying')->delete();
        DB::table('hobbies')->where('name', '=', 'Kitesurfing')->delete();
        DB::table('hobbies')->where('name', '=', 'Knife collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Knife making')->delete();
        DB::table('hobbies')->where('name', '=', 'Knife throwing')->delete();
        DB::table('hobbies')->where('name', '=', 'Knitting')->delete();
        DB::table('hobbies')->where('name', '=', 'Knot tying')->delete();
        DB::table('hobbies')->where('name', '=', 'Knowledge/word games')->delete();
        DB::table('hobbies')->where('name', '=', 'Kombucha brewing')->delete();
        DB::table('hobbies')->where('name', '=', 'Kung fu')->delete();
        DB::table('hobbies')->where('name', '=', 'Lace making')->delete();
        DB::table('hobbies')->where('name', '=', 'Lacrosse')->delete();
        DB::table('hobbies')->where('name', '=', 'Lacrosse')->delete();
        DB::table('hobbies')->where('name', '=', 'Lapidary')->delete();
        DB::table('hobbies')->where('name', '=', 'LARPing')->delete();
        DB::table('hobbies')->where('name', '=', 'Laser tag')->delete();
        DB::table('hobbies')->where('name', '=', 'Learning')->delete();
        DB::table('hobbies')->where('name', '=', 'Leather crafting')->delete();
        DB::table('hobbies')->where('name', '=', 'Leaves')->delete();
        DB::table('hobbies')->where('name', '=', 'Lego building')->delete();
        DB::table('hobbies')->where('name', '=', 'Letterboxing')->delete();
        DB::table('hobbies')->where('name', '=', 'Listening to music')->delete();
        DB::table('hobbies')->where('name', '=', 'Listening to podcasts')->delete();
        DB::table('hobbies')->where('name', '=', 'Livestreaming')->delete();
        DB::table('hobbies')->where('name', '=', 'Lock picking')->delete();
        DB::table('hobbies')->where('name', '=', 'Lomography')->delete();
        DB::table('hobbies')->where('name', '=', 'Long-distance running')->delete();
        DB::table('hobbies')->where('name', '=', 'Longboarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Longboarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Longboarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Lotology (lottery ticket collecting)')->delete();
        DB::table('hobbies')->where('name', '=', 'Machining')->delete();
        DB::table('hobbies')->where('name', '=', 'Macrame')->delete();
        DB::table('hobbies')->where('name', '=', 'Magic')->delete();
        DB::table('hobbies')->where('name', '=', 'Magic')->delete();
        DB::table('hobbies')->where('name', '=', 'Magnet fishing')->delete();
        DB::table('hobbies')->where('name', '=', 'Mahjong')->delete();
        DB::table('hobbies')->where('name', '=', 'Makeup')->delete();
        DB::table('hobbies')->where('name', '=', 'Marbles')->delete();
        DB::table('hobbies')->where('name', '=', 'Marching band')->delete();
        DB::table('hobbies')->where('name', '=', 'Martial arts')->delete();
        DB::table('hobbies')->where('name', '=', 'Martial arts')->delete();
        DB::table('hobbies')->where('name', '=', 'Massaging')->delete();
        DB::table('hobbies')->where('name', '=', 'Mathematics')->delete();
        DB::table('hobbies')->where('name', '=', 'Mazes (indoor/outdoor)')->delete();
        DB::table('hobbies')->where('name', '=', 'Mechanics')->delete();
        DB::table('hobbies')->where('name', '=', 'Medical science')->delete();
        DB::table('hobbies')->where('name', '=', 'Meditation')->delete();
        DB::table('hobbies')->where('name', '=', 'Meditation')->delete();
        DB::table('hobbies')->where('name', '=', 'Memory training')->delete();
        DB::table('hobbies')->where('name', '=', 'Metal detecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Metal detecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Metalworking')->delete();
        DB::table('hobbies')->where('name', '=', 'Meteorology')->delete();
        DB::table('hobbies')->where('name', '=', 'Microbiology')->delete();
        DB::table('hobbies')->where('name', '=', 'Microscopy')->delete();
        DB::table('hobbies')->where('name', '=', 'Mineral collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Mini Golf')->delete();
        DB::table('hobbies')->where('name', '=', 'Miniature art')->delete();
        DB::table('hobbies')->where('name', '=', 'Minimalism')->delete();
        DB::table('hobbies')->where('name', '=', 'Model aircraft')->delete();
        DB::table('hobbies')->where('name', '=', 'Model building')->delete();
        DB::table('hobbies')->where('name', '=', 'Model engineering')->delete();
        DB::table('hobbies')->where('name', '=', 'Model racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Model United Nations')->delete();
        DB::table('hobbies')->where('name', '=', 'Motor sports')->delete();
        DB::table('hobbies')->where('name', '=', 'Motorcycling')->delete();
        DB::table('hobbies')->where('name', '=', 'Mountain biking')->delete();
        DB::table('hobbies')->where('name', '=', 'Mountaineering')->delete();
        DB::table('hobbies')->where('name', '=', 'Movie memorabilia collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Museum visiting')->delete();
        DB::table('hobbies')->where('name', '=', 'Mushroom hunting/mycology')->delete();
        DB::table('hobbies')->where('name', '=', 'Music')->delete();
        DB::table('hobbies')->where('name', '=', 'Nail art')->delete();
        DB::table('hobbies')->where('name', '=', 'Needlepoint')->delete();
        DB::table('hobbies')->where('name', '=', 'Netball')->delete();
        DB::table('hobbies')->where('name', '=', 'Noodling')->delete();
        DB::table('hobbies')->where('name', '=', 'Nordic skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Orienteering')->delete();
        DB::table('hobbies')->where('name', '=', 'Orienteering')->delete();
        DB::table('hobbies')->where('name', '=', 'Origami')->delete();
        DB::table('hobbies')->where('name', '=', 'Paintball')->delete();
        DB::table('hobbies')->where('name', '=', 'Painting')->delete();
        DB::table('hobbies')->where('name', '=', 'Palmistry')->delete();
        DB::table('hobbies')->where('name', '=', 'Paragliding')->delete();
        DB::table('hobbies')->where('name', '=', 'Parkour')->delete();
        DB::table('hobbies')->where('name', '=', 'People-watching')->delete();
        DB::table('hobbies')->where('name', '=', 'Performance')->delete();
        DB::table('hobbies')->where('name', '=', 'Perfume')->delete();
        DB::table('hobbies')->where('name', '=', 'Pet')->delete();
        DB::table('hobbies')->where('name', '=', 'Pet adoption & fostering')->delete();
        DB::table('hobbies')->where('name', '=', 'Pet sitting')->delete();
        DB::table('hobbies')->where('name', '=', 'Philately')->delete();
        DB::table('hobbies')->where('name', '=', 'Phillumeny')->delete();
        DB::table('hobbies')->where('name', '=', 'Philosophy')->delete();
        DB::table('hobbies')->where('name', '=', 'Photography')->delete();
        DB::table('hobbies')->where('name', '=', 'Physics')->delete();
        DB::table('hobbies')->where('name', '=', 'Pickleball')->delete();
        DB::table('hobbies')->where('name', '=', 'Picnicking')->delete();
        DB::table('hobbies')->where('name', '=', 'Pilates')->delete();
        DB::table('hobbies')->where('name', '=', 'Pin (lapel)')->delete();
        DB::table('hobbies')->where('name', '=', 'Planning')->delete();
        DB::table('hobbies')->where('name', '=', 'Plastic art')->delete();
        DB::table('hobbies')->where('name', '=', 'Playing musical instruments')->delete();
        DB::table('hobbies')->where('name', '=', 'Podcast hosting')->delete();
        DB::table('hobbies')->where('name', '=', 'Poetry')->delete();
        DB::table('hobbies')->where('name', '=', 'Poi')->delete();
        DB::table('hobbies')->where('name', '=', 'Poker')->delete();
        DB::table('hobbies')->where('name', '=', 'Pole dancing')->delete();
        DB::table('hobbies')->where('name', '=', 'Pool')->delete();
        DB::table('hobbies')->where('name', '=', 'Postcrossing')->delete();
        DB::table('hobbies')->where('name', '=', 'Pottery')->delete();
        DB::table('hobbies')->where('name', '=', 'Powerboat racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Powerlifting')->delete();
        DB::table('hobbies')->where('name', '=', 'Practical jokes')->delete();
        DB::table('hobbies')->where('name', '=', 'Pressed flower craft')->delete();
        DB::table('hobbies')->where('name', '=', 'Proofreading and editing')->delete();
        DB::table('hobbies')->where('name', '=', 'Proverbs')->delete();
        DB::table('hobbies')->where('name', '=', 'Psychology')->delete();
        DB::table('hobbies')->where('name', '=', 'Public speaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Public transport riding')->delete();
        DB::table('hobbies')->where('name', '=', 'Puppetry')->delete();
        DB::table('hobbies')->where('name', '=', 'Puzzles')->delete();
        DB::table('hobbies')->where('name', '=', 'Pyrography')->delete();
        DB::table('hobbies')->where('name', '=', 'Qigong')->delete();
        DB::table('hobbies')->where('name', '=', 'Quidditch')->delete();
        DB::table('hobbies')->where('name', '=', 'Quilling')->delete();
        DB::table('hobbies')->where('name', '=', 'Quilting')->delete();
        DB::table('hobbies')->where('name', '=', 'Quizzes')->delete();
        DB::table('hobbies')->where('name', '=', 'Race walking')->delete();
        DB::table('hobbies')->where('name', '=', 'Racquetball')->delete();
        DB::table('hobbies')->where('name', '=', 'Radio-controlled car racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Radio-controlled model collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Radio-controlled model playing')->delete();
        DB::table('hobbies')->where('name', '=', 'Rafting')->delete();
        DB::table('hobbies')->where('name', '=', 'Rail transport modeling')->delete();
        DB::table('hobbies')->where('name', '=', 'Railway journeys')->delete();
        DB::table('hobbies')->where('name', '=', 'Railway studies')->delete();
        DB::table('hobbies')->where('name', '=', 'Rappelling')->delete();
        DB::table('hobbies')->where('name', '=', 'Rapping')->delete();
        DB::table('hobbies')->where('name', '=', 'Reading')->delete();
        DB::table('hobbies')->where('name', '=', 'Reading')->delete();
        DB::table('hobbies')->where('name', '=', 'Recipe creation')->delete();
        DB::table('hobbies')->where('name', '=', 'Record collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Refinishing')->delete();
        DB::table('hobbies')->where('name', '=', 'Reiki')->delete();
        DB::table('hobbies')->where('name', '=', 'Renaissance fair')->delete();
        DB::table('hobbies')->where('name', '=', 'Renovating')->delete();
        DB::table('hobbies')->where('name', '=', 'Research')->delete();
        DB::table('hobbies')->where('name', '=', 'Reviewing Gadgets')->delete();
        DB::table('hobbies')->where('name', '=', 'Road biking')->delete();
        DB::table('hobbies')->where('name', '=', 'Robot combat')->delete();
        DB::table('hobbies')->where('name', '=', 'Rock balancing')->delete();
        DB::table('hobbies')->where('name', '=', 'Rock climbing')->delete();
        DB::table('hobbies')->where('name', '=', 'Rock painting')->delete();
        DB::table('hobbies')->where('name', '=', 'Rock tumbling')->delete();
        DB::table('hobbies')->where('name', '=', 'Role-playing games')->delete();
        DB::table('hobbies')->where('name', '=', 'Roller derby')->delete();
        DB::table('hobbies')->where('name', '=', 'Roller skating')->delete();
        DB::table('hobbies')->where('name', '=', "Rubik's Cube")->delete();
        DB::table('hobbies')->where('name', '=', 'Rugby league football')->delete();
        DB::table('hobbies')->where('name', '=', 'Rugby')->delete();
        DB::table('hobbies')->where('name', '=', 'Running')->delete();
        DB::table('hobbies')->where('name', '=', 'Sailing')->delete();
        DB::table('hobbies')->where('name', '=', 'Sand art')->delete();
        DB::table('hobbies')->where('name', '=', 'Satellite watching')->delete();
        DB::table('hobbies')->where('name', '=', 'Science and technology studies')->delete();
        DB::table('hobbies')->where('name', '=', 'Scouting')->delete();
        DB::table('hobbies')->where('name', '=', 'Scrapbooking')->delete();
        DB::table('hobbies')->where('name', '=', 'SCUBA Diving')->delete();
        DB::table('hobbies')->where('name', '=', 'Scuba diving')->delete();
        DB::table('hobbies')->where('name', '=', 'Sculling or rowing')->delete();
        DB::table('hobbies')->where('name', '=', 'Sculpting')->delete();
        DB::table('hobbies')->where('name', '=', 'Scutelliphily')->delete();
        DB::table('hobbies')->where('name', '=', 'Sea glass collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Seashell collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Sewing')->delete();
        DB::table('hobbies')->where('name', '=', 'Shoemaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Shoes')->delete();
        DB::table('hobbies')->where('name', '=', 'Shogi')->delete();
        DB::table('hobbies')->where('name', '=', 'Shooting sport')->delete();
        DB::table('hobbies')->where('name', '=', 'Shooting')->delete();
        DB::table('hobbies')->where('name', '=', 'Shopping')->delete();
        DB::table('hobbies')->where('name', '=', 'Shortwave listening')->delete();
        DB::table('hobbies')->where('name', '=', 'Shuffleboard')->delete();
        DB::table('hobbies')->where('name', '=', 'Singing')->delete();
        DB::table('hobbies')->where('name', '=', 'Skateboarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Sketching')->delete();
        DB::table('hobbies')->where('name', '=', 'Skiing')->delete();
        DB::table('hobbies')->where('name', '=', 'Skimboarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Skipping rope')->delete();
        DB::table('hobbies')->where('name', '=', 'Skydiving')->delete();
        DB::table('hobbies')->where('name', '=', 'Slacklining')->delete();
        DB::table('hobbies')->where('name', '=', 'Sled dog racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Sledding')->delete();
        DB::table('hobbies')->where('name', '=', 'Slot car')->delete();
        DB::table('hobbies')->where('name', '=', 'Slot car')->delete();
        DB::table('hobbies')->where('name', '=', 'Slot car racing')->delete();
        DB::table('hobbies')->where('name', '=', 'Snorkeling')->delete();
        DB::table('hobbies')->where('name', '=', 'Snowboarding')->delete();
        DB::table('hobbies')->where('name', '=', 'Snowmobiling')->delete();
        DB::table('hobbies')->where('name', '=', 'Snowshoeing')->delete();
        DB::table('hobbies')->where('name', '=', 'Soapmaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Soccer')->delete();
        DB::table('hobbies')->where('name', '=', 'Social media')->delete();
        DB::table('hobbies')->where('name', '=', 'Social studies')->delete();
        DB::table('hobbies')->where('name', '=', 'Softball')->delete();
        DB::table('hobbies')->where('name', '=', 'Speed skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Speedcubing')->delete();
        DB::table('hobbies')->where('name', '=', 'Sport stacking')->delete();
        DB::table('hobbies')->where('name', '=', 'Sports memorabilia')->delete();
        DB::table('hobbies')->where('name', '=', 'Sports science')->delete();
        DB::table('hobbies')->where('name', '=', 'Spreadsheets')->delete();
        DB::table('hobbies')->where('name', '=', 'Squash')->delete();
        DB::table('hobbies')->where('name', '=', 'Stamp collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Stamp collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Stand-up comedy')->delete();
        DB::table('hobbies')->where('name', '=', 'Stone collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Stone skipping')->delete();
        DB::table('hobbies')->where('name', '=', 'Storm chasing')->delete();
        DB::table('hobbies')->where('name', '=', 'Storytelling')->delete();
        DB::table('hobbies')->where('name', '=', 'Stripping')->delete();
        DB::table('hobbies')->where('name', '=', 'Stuffed toy collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Sudoku')->delete();
        DB::table('hobbies')->where('name', '=', 'Sun bathing')->delete();
        DB::table('hobbies')->where('name', '=', 'Surfing')->delete();
        DB::table('hobbies')->where('name', '=', 'Survivalism')->delete();
        DB::table('hobbies')->where('name', '=', 'Swimming')->delete();
        DB::table('hobbies')->where('name', '=', 'Table football')->delete();
        DB::table('hobbies')->where('name', '=', 'Table tennis')->delete();
        DB::table('hobbies')->where('name', '=', 'Taekwondo')->delete();
        DB::table('hobbies')->where('name', '=', 'Tai chi')->delete();
        DB::table('hobbies')->where('name', '=', 'Tapestry')->delete();
        DB::table('hobbies')->where('name', '=', 'Tarot')->delete();
        DB::table('hobbies')->where('name', '=', 'Tatebanko')->delete();
        DB::table('hobbies')->where('name', '=', 'Tattooing')->delete();
        DB::table('hobbies')->where('name', '=', 'Taxidermy')->delete();
        DB::table('hobbies')->where('name', '=', 'Tea bag collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Teaching')->delete();
        DB::table('hobbies')->where('name', '=', 'Telling jokes')->delete();
        DB::table('hobbies')->where('name', '=', 'Tennis')->delete();
        DB::table('hobbies')->where('name', '=', 'Tennis polo')->delete();
        DB::table('hobbies')->where('name', '=', 'Tether car')->delete();
        DB::table('hobbies')->where('name', '=', 'Thrifting')->delete();
        DB::table('hobbies')->where('name', '=', 'Thru-hiking')->delete();
        DB::table('hobbies')->where('name', '=', 'Ticket collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Topiary')->delete();
        DB::table('hobbies')->where('name', '=', 'Tour skating')->delete();
        DB::table('hobbies')->where('name', '=', 'Tourism')->delete();
        DB::table('hobbies')->where('name', '=', 'Toys')->delete();
        DB::table('hobbies')->where('name', '=', 'Trade fair visiting')->delete();
        DB::table('hobbies')->where('name', '=', 'Trainspotting')->delete();
        DB::table('hobbies')->where('name', '=', 'Transit map collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Trapshooting')->delete();
        DB::table('hobbies')->where('name', '=', 'Travel')->delete();
        DB::table('hobbies')->where('name', '=', 'Triathlon[')->delete();
        DB::table('hobbies')->where('name', '=', 'Ultimate frisbee')->delete();
        DB::table('hobbies')->where('name', '=', 'Upcycling')->delete();
        DB::table('hobbies')->where('name', '=', 'Urban exploration')->delete();
        DB::table('hobbies')->where('name', '=', 'Vacation')->delete();
        DB::table('hobbies')->where('name', '=', 'Vegetable farming')->delete();
        DB::table('hobbies')->where('name', '=', 'Vehicle restoration')->delete();
        DB::table('hobbies')->where('name', '=', 'Video editing')->delete();
        DB::table('hobbies')->where('name', '=', 'Video game collecting')->delete();
        DB::table('hobbies')->where('name', '=', 'Video game developing')->delete();
        DB::table('hobbies')->where('name', '=', 'Video gaming')->delete();
        DB::table('hobbies')->where('name', '=', 'Video making')->delete();
        DB::table('hobbies')->where('name', '=', 'Videography')->delete();
        DB::table('hobbies')->where('name', '=', 'Vintage cars')->delete();
        DB::table('hobbies')->where('name', '=', 'Vintage clothing')->delete();
        DB::table('hobbies')->where('name', '=', 'Vinyl Records')->delete();
        DB::table('hobbies')->where('name', '=', 'Volleyball')->delete();
        DB::table('hobbies')->where('name', '=', 'Volunteering')->delete();
        DB::table('hobbies')->where('name', '=', 'VR Gaming')->delete();
        DB::table('hobbies')->where('name', '=', 'Walking')->delete();
        DB::table('hobbies')->where('name', '=', 'Watching documentaries')->delete();
        DB::table('hobbies')->where('name', '=', 'Watching movies')->delete();
        DB::table('hobbies')->where('name', '=', 'Watching television')->delete();
        DB::table('hobbies')->where('name', '=', 'Water polo')->delete();
        DB::table('hobbies')->where('name', '=', 'Water sports')->delete();
        DB::table('hobbies')->where('name', '=', 'Waxing')->delete();
        DB::table('hobbies')->where('name', '=', 'Weaving')->delete();
        DB::table('hobbies')->where('name', '=', 'Web design')->delete();
        DB::table('hobbies')->where('name', '=', 'Webtooning')->delete();
        DB::table('hobbies')->where('name', '=', 'Weight training')->delete();
        DB::table('hobbies')->where('name', '=', 'Welding')->delete();
        DB::table('hobbies')->where('name', '=', 'Whale watching')->delete();
        DB::table('hobbies')->where('name', '=', 'Whittling')->delete();
        DB::table('hobbies')->where('name', '=', 'Wikipedia editing')->delete();
        DB::table('hobbies')->where('name', '=', 'Wine tasting')->delete();
        DB::table('hobbies')->where('name', '=', 'Winemaking')->delete();
        DB::table('hobbies')->where('name', '=', 'Wood carving')->delete();
        DB::table('hobbies')->where('name', '=', 'Woodworking')->delete();
        DB::table('hobbies')->where('name', '=', 'Word searches')->delete();
        DB::table('hobbies')->where('name', '=', 'Worldbuilding')->delete();
        DB::table('hobbies')->where('name', '=', 'Wrestling')->delete();
        DB::table('hobbies')->where('name', '=', 'Writing music')->delete();
        DB::table('hobbies')->where('name', '=', 'Writing')->delete();
        DB::table('hobbies')->where('name', '=', 'Yo-yoing')->delete();
        DB::table('hobbies')->where('name', '=', 'Yoga')->delete();
        DB::table('hobbies')->where('name', '=', 'Zoo visiting')->delete();
        DB::table('hobbies')->where('name', '=', 'Zumba')->delete();
    }
}
