<?php

function drupaltestbot_profile_details() {
  return array(
    'name' => 'PIFR Client (drupaltestbot)',
    'description' => 'Install profile for basic installation of a PIFR client'
  );
}

function drupaltestbot_profile_modules() {
  return array('help', 'dblog', 'coder', 'coder_tough_love', 'pifr_client', 'pifr', 'pifr_assertion', 'pifr_coder', 'pifr_drupal', 'pifr_simpletest');
}
