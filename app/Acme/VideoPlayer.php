<?php

class VideoPlayer {
    public function play()
    {
        // play the video
    }
}

class AviVideoPlayer extends VideoPlayer {
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new Exception; // violates LSP
        }
    }
}

