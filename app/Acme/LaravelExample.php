<?php

interface LessonRepositoryInterface {
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        return Lesson::all()->toArray(); // violates LSP
    }
}

