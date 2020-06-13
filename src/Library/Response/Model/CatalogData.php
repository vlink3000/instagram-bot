<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * CatalogData.
 *
 * @method CatalogEdge[] getEdges()
 * @method PageInfo getPageInfo()
 * @method bool isEdges()
 * @method bool isPageInfo()
 * @method $this setEdges(CatalogEdge[] $value)
 * @method $this setPageInfo(PageInfo $value)
 * @method $this unsetEdges()
 * @method $this unsetPageInfo()
 */
class CatalogData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'page_info'          => 'PageInfo',
        'edges'              => 'CatalogEdge[]',
    ];
}
