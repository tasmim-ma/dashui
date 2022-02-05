<?php

if (! function_exists('url_image')) {
    function url_image(string $link, string $options = 't_default')
    {
        return 'https://res.cloudinary.com/tasmim/image/upload/' . $options . '/' . $link;
    }
}
if (! function_exists('truncate')) {
    function truncate($string, $length = 100, $append = "...")
    {
        $string = trim($string);

        if (strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
        }

        return $string;
    }
}


if (! function_exists('readableSize')) {
    function readableSize($bytes)
    {
        $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }
}

if (! function_exists('format_price')) {
    function format_price($number, $thousands_sep = ' ')
    {
        if (empty($number)) {
            return '0 DH';
        }

        return number_format($number, 0, ',', $thousands_sep) . ' DH';
    }
}

if (! function_exists('filter_url')) {
    function filter_url(string $key)
    {
        if ($key) {
            return remove_keys(request()?->fullUrlWithQuery(['show' => 'filter']), ['page', $key]) . '&' . $key . '=';
        }

        return remove_key(request()?->fullUrlWithQuery(['show' => 'filter']), 'page');
    }
}

if (! function_exists('remove_key')) {
    function remove_key(string $url, $key)
    {
        return preg_replace('/(?:&|(\?))' . $key . '=[^&]*(?(1)&|)?/i', "$1", $url);
    }
}

if (! function_exists('remove_keys')) {
    function remove_keys(string $url, array $keys = [])
    {
        foreach ($keys as $key) {
            $url = preg_replace('/(?:&|(\?))' . $key . '=[^&]*(?(1)&|)?/i', "$1", $url);
        }

        return $url;
    }
}

if (! function_exists('update_key')) {
    function update_key($url, $key, $value)
    {
        $url = preg_replace('/(.*)(?|&)' . $key . '=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&');
        $url = substr($url, 0, -1);

        if (! str_contains($url, '?')) {
            return ($url . '?' . $key . '=' . $value);
        }

        return ($url . '&' . $key . '=' . $value);
    }
}

if (! function_exists('getDifferencePercentage')) {
    function getDifferencePercentage($current, $previous)
    {
        $value = (int)($previous) ? (number_format(abs($current - $previous) / $previous, 2) * 100) : 0;
        $sign = (($current - $previous) >= 0) ? '+' : '-';

        return [
            'value' => $value,
            'sign' => $sign,
            'formated' => $sign . $value . '%',
        ];
    }
}
