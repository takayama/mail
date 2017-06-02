<?php
declare(strict_types=1);

namespace Genkgo\TestMail\Protocol\Smtp\Request;

use Genkgo\Mail\Protocol\ConnectionInterface;
use Genkgo\Mail\Protocol\Smtp\Request\AuthLoginPasswordRequest;
use Genkgo\TestMail\AbstractTestCase;

final class AuthLoginPasswordRequestTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function it_executes()
    {
        $connection = $this->createMock(ConnectionInterface::class);
        $connection
            ->expects($this->once())
            ->method('send')
            ->with("dGVzdA==\r\n");

        $command = new AuthLoginPasswordRequest('test');
        $command->execute($connection);
    }

}