<?php

class Wish extends Eloquent {
    protected $fillable  = array('from', 'to', 'message');
}