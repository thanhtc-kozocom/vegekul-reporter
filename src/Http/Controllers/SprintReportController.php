<?php

namespace Vegekul\Reporter\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Vegekul\Reporter\Services\BacklogApiService;

class SprintReportController extends Controller
{
    protected $api;

    public function __construct(BacklogApiService $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        $sprints = $this->api->getSprints();
        return view('vegekul-reporter::dashboard', compact('sprints'));
    }

    public function sprint(Request $request, $sprintId)
    {
        $issues = $this->api->getIssuesBySprintId($sprintId);

        $bugCount = collect($issues)->filter(fn($i) => $i['issueType']['name'] === 'Bug')->count();
        $statusSummary = collect($issues)->groupBy('status.name')->map->count();

        return response()->json([
            'issues' => $issues,
            'bugCount' => $bugCount,
            'statusSummary' => $statusSummary,
        ]);
    }
}
