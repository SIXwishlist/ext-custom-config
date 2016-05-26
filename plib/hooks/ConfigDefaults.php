<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_CustomConfig_ConfigDefaults extends pm_Hook_ConfigDefaults
{

    public function getDefaults()
    {
        return [
            'homepage' => 'https://www.plesk.com/',
            'timeout' => 60,
        ];
    }

}
