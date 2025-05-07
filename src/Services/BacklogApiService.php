<?php

namespace Vegekul\Reporter\Services;

use Illuminate\Support\Facades\Http;

class BacklogApiService
{
    protected $baseUrl;
    protected $apiKey;
    protected $projectId;

    public function __construct()
    {
        $this->baseUrl = config('reporter.base_url');
        $this->apiKey = config('reporter.api_key');
        $this->projectId = config('reporter.project_id');
    }

    public function getSprints()
    {
        return Http::get("{$this->baseUrl}/projects/{$this->projectId}/versions", [
            'apiKey' => $this->apiKey,
        ])->json();
    }

    public function getIssuesBySprintId($sprintId)
    {
        return Http::get("{$this->baseUrl}/issues", [
            'apiKey' => $this->apiKey,
            'projectId' => $this->projectId,
            'versionId[]' => $sprintId,
            'count' => 100,
        ])->json();
    }
}
