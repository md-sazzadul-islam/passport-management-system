<?php

namespace Yajra\DataTables\Html\Editor\Fields;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Options extends Collection
{
    /**
     * Return a Yes/No options.
     *
     * @return Options
     */
    public static function yesNo()
    {
        $data = [
            ['label' => __('Yes'), 'value' => 1],
            ['label' => __('No'), 'value' => 0],
        ];

        return new static($data);
    }

    /**
     * Get options from a model.
     *
     * @param mixed $model
     * @param string $value
     * @param string $key
     * @return Collection
     */
    public static function model($model, $value, $key = 'id')
    {
        if (! $model instanceof Builder) {
            $model = $model::query();
        }

        return $model->get()->map(function ($model) use ($value, $key) {
            return [
                'value' => $model->{$key},
                'label' => $model->{$value},
            ];
        });
    }

    /**
     * Get options from a table.
     *
     * @param mixed $table
     * @param string $value
     * @param string $key
     * @param \Closure $whereCallback
     * @param string|null $key
     * @return Collection
     */
    public static function table($table, $value, $key = 'id', \Closure $whereCallback = null, $connection = null)
    {
        $query = DB::connection($connection)
                   ->table($table)
                   ->select("{$value} as label", "{$key} as value");

        if ($whereCallback) {
            $query->where($whereCallback);
        }

        return $query->get();
    }

    /**
     * Return a True/False options.
     *
     * @return Options
     */
    public static function trueFalse()
    {
        $data = [
            ['label' => __('True'), 'value' => 1],
            ['label' => __('False'), 'value' => 0],
        ];

        return new static($data);
    }

    /**
     * Push an item onto the end of the collection.
     *
     * @param mixed $value
     * @param mixed $key
     * @return Options
     */
    public function append($value, $key)
    {
        return $this->push(['label' => $value, 'value' => $key]);
    }

    /**
     * Push an item onto the beginning of the collection.
     *
     * @param  mixed $value
     * @param  mixed $key
     * @return \Illuminate\Support\Collection
     */
    public function prepend($value, $key = null)
    {
        $data = ['label' => $value, 'value' => $key];

        return parent::prepend($data);
    }
}
