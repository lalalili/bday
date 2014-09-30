<?php

class WishSeeder extends Seeder
{
    public function run()
    {
        DB::table('wishes') -> delete();

        Wish::create(array(
            'from' => 'James',
            'to' => 'Christine',
            'message' =>'From James to Christine !!'
        ));
        Wish::create(array(
            'from' => 'James',
            'to' => 'Nina',
            'message' =>'From James to Nina !!'
        ));
        Wish::create(array(
            'from' => 'Anne',
            'to' => 'Eunice',
            'message' =>'From Anne to Eunice !!'
        ));
    }
}