<?php

namespace App\Helpers\Enum;

class QueryParam
{
    // Ordenado
    const ORDER_BY_KEY = 'sort';
    // Paginación
    const PAGINATION_KEY = 'per_page';
    const SKIP_PAGINATION_KEY = 'skip_paging';
    const PAGINATION_ITEMS_DEFAULT = 5;
    const SKIP_PAGINATION_DEFAULT = false;

    // Filtros
    const FILTERS_KEY = 'q';
    const FILTERS_FIELD_KEY = 'filters';
    const FIELD_KEY = 'field';
    const TYPE_KEY = 'type';
    const VALUE_KEY = 'value';
    const VALIDATION_KEY = 'validation';
}