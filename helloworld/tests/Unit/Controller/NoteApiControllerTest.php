<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: JH ALDT <j.henriquez@aledit.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\HelloWorld\Tests\Unit\Controller;

use OCA\HelloWorld\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
