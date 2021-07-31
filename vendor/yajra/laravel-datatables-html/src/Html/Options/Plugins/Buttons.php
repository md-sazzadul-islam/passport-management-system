<?php

namespace Yajra\DataTables\Html\Options\Plugins;

use Illuminate\Contracts\Support\Arrayable;

/**
 * DataTables - Buttons plugin option builder.
 *
 * @see https://datatables.net/extensions/buttons/
 * @see https://datatables.net/reference/option/buttons
 */
trait Buttons
{
    /**
     * Attach multiple buttons to builder.
     *
     * @param array|mixed ...$buttons
     * @return $this
     * @see https://www.datatables.net/extensions/buttons/
     */
    public function buttons(...$buttons)
    {
        if (is_array($buttons[0])) {
            $buttons = $buttons[0];
        }

        foreach ($buttons as $button) {
            $this->attributes['buttons'][] = $button instanceof Arrayable ? $button->toArray() : $button;
        }

        return $this;
    }
}
