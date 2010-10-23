<?php

namespace Model\Repository\Base;

/**
 * Base class of repository of Model\Document\Document document.
 */
abstract class Document extends \Mondongo\Repository
{


    protected $documentClass = 'Model\\Document\\Document';


    protected $connectionName = NULL;


    protected $collectionName = 'model_document_document';


    protected $isFile = false;

    /**
     * Ensure indexes.
     *
     * @return void
     */
    public function ensureIndexes()
    {

    }
}