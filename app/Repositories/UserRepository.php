<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Services\User\CreateService;
use App\Services\User\DeleteService;
use App\Services\User\IndexService;
use App\Services\User\ShowService;
use App\Services\User\UpdateService;

class UserRepository implements UserInterface
{
    protected $indexService, $createService, $showService, $updateService, $deleteService;

    public function __construct(
        IndexService $indexService,
        CreateService $createService,
        ShowService $showService,
        UpdateService $updateService,
        DeleteService $deleteService
    ) {
        $this->indexService = $indexService;
        $this->createService = $createService;
        $this->showService = $showService;
        $this->updateService = $updateService;
        $this->deleteService = $deleteService;
    }

    public function index()
    {
        $data = $this->indexService->index();

        return $data;
    }

    public function create($request)
    {
        $data = $this->createService->create($request);

        return $data;
    }

    public function show($id)
    {
        $data = $this->showService->show($id);

        return $data;
    }

    public function update($id, $request)
    {
        $data = $this->updateService->update($id, $request);

        return $data;
    }

    public function delete($id)
    {
        $data = $this->deleteService->delete($id);

        return $data;
    }
}
