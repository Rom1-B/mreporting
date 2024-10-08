<?php

/**
 * -------------------------------------------------------------------------
 * Mreporting plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Mreporting.
 *
 * Mreporting is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Mreporting is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Mreporting. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2003-2023 by Mreporting plugin team.
 * @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/pluginsGLPI/mreporting
 * -------------------------------------------------------------------------
 */

global $LANG;

$LANG['plugin_mreporting']['Inventory']['title'] = 'Inventário';

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['title']    = 'Computadores por sistema operacional';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByOS']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['title']    = 'Computadores por sistema operacional';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['desc']     = 'Pizza';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByOS']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['title']    = 'Computadores por fabricante';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByFabricant']['category'] = 'Fabricante';

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['title']    = 'Computadores por fabricante';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['desc']     = 'Pizza';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByFabricant']['category'] = 'Fabricante';

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['title']    = 'Computadores por tipo';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByType']['category'] = 'Tipo';

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByStatus']['title']    = 'Computadores por status';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByStatus']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByStatus']['category'] = 'Status';

$LANG['plugin_mreporting']['Inventory']['reportHbarPrintersByStatus']['title']    = 'Impressoras por status';
$LANG['plugin_mreporting']['Inventory']['reportHbarPrintersByStatus']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarPrintersByStatus']['category'] = 'Status';

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['title']    = 'Computadores por tipo';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['desc']     = 'Pizza';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByType']['category'] = 'Tipo';

$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['title']    = 'Versões do Windows';
$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarWindows']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['title']    = 'Distribuições Linux (detalhes)';
$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarLinux']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportHbarLinuxDistro']['title']    = 'Distribuições Linux (geral)';
$LANG['plugin_mreporting']['Inventory']['reportHbarLinuxDistro']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarLinuxDistro']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportHbarMac']['title']    = 'Versões do macOS (detalhes)';
$LANG['plugin_mreporting']['Inventory']['reportHbarMac']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarMac']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportHbarMacFamily']['title']    = 'Versões do macOS (geral)';
$LANG['plugin_mreporting']['Inventory']['reportHbarMacFamily']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarMacFamily']['category'] = 'Sistema Operacional';

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['title']    = 'Computadores por período';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByAge']['category'] = 'Inventário';

$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['title']    = 'Computadores por período';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['desc']     = 'Pizza';
$LANG['plugin_mreporting']['Inventory']['reportPieComputersByAge']['category'] = 'Inventário';

$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['title']    = 'Versões do agente FusionInventory';
$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarFusionInventory']['category'] = 'Inventário';

$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['title']    = 'Versões do agente FusionInventory';
$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['desc']     = 'Pizza';
$LANG['plugin_mreporting']['Inventory']['reportPieFusionInventory']['category'] = 'Inventário';

$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['title']    = 'Computadores por resolução';
$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarMonitors']['category'] = 'Inventário';

$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByEntity']['title']    = 'Computadores por entidade';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByEntity']['desc']     = 'Barras';
$LANG['plugin_mreporting']['Inventory']['reportHbarComputersByEntity']['category'] = 'Entidade';
