<?php
class GoogleFinder
{

        private $results = [
                'google',
                'yandex',
        ];

        /**
         * @param string $word
         * @return array
         */
        public function search($word)
        {
                if (in_array($word, $this->results)) {
                        return [
                                'result' => true,
                                'word' => $word,
                                'time' => 0.001,
                        ];
                }
                return [
                        'result' => false,
                        'word' => $word,
                        'time' => 1.2,
                ];
        }

}