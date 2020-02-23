<?php

interface SearchAdapter {
   // This declares a unified interface for all search adapters
   public function __construct($finder);
   public function search($word);
}
