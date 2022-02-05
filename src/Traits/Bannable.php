<?php

namespace Tasmim\Dashui\Traits;

trait Bannable
{
    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = (bool)$value;
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', false);
    }

    public function activer()
    {
        $this->active = true;

        return $this->save();
    }

    public function desactiver()
    {
        $this->active = false;

        return $this->save();
    }
}
