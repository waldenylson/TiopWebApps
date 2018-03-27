<?php namespace TIOp\Domains\Radars\Presenters;

class RadarPresenter extends Presenter
{
    public function length()
    {
        $helper = new TimeHelper($this->entity->length);

        return $helper->toHoursMinutesAndSeconds();
    }

    public function level()
    {
        return ucfirst(trans('lesson::lesson.level_'.$this->entity->level));
    }
}