<?php

    foreach ($this->skills as $skill) {
        $this->partial(__DIR__.'/level.php', ['skill' => $skill]);
    }

?>