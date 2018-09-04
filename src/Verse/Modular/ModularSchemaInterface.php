<?php


namespace Verse\Modular;


interface ModularSchemaInterface extends ModularSystemModule
{
    /**
     * @param ModularProcessor $processor
     */
    public function configure ($processor);
}