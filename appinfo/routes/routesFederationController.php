<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2016 Lukas Reschke <lukas@statuscode.ch>
 *
 * @author Lukas Reschke <lukas@statuscode.ch>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

$requirements = [
	'apiVersion' => 'v1',
];

return [
	'ocs' => [
		['name' => 'Federation#acceptShare', 'url' => 'api/{apiVersion}/federation/invitation/{id}', 'verb' => 'POST', 'requirements' => $requirements],
		['name' => 'Federation#rejectShare', 'url' => 'api/{apiVersion}/federation/invitation/{id}', 'verb' => 'DELETE', 'requirements' => $requirements],
		['name' => 'Federation#getShares', 'url' => 'api/{apiVersion}/federation/invitation', 'verb' => 'GET', 'requirements' => $requirements],
	],
];
