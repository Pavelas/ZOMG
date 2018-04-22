<?php

namespace App\Http\Controllers;

use App\Clip;
use App\Game;
use App\Vote;
use App\Helpers\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index($id = 0)
    {
        if ($id > 0)
            $gameId = Game::findOrFail($id)->id;
        else
            $gameId = Game::has('clips')->inRandomOrder()->first()->id;

        $clips = Clip::where('game_id', $gameId)
            ->inRandomOrder()
            ->limit(2)
            ->get();

        $vote = Vote::create([
            'winner_id' => $clips[0]->id,
            'oponnent_id' => $clips[1]->id,
            'token' => bin2hex(random_bytes(16))
        ]);

        $ticket = array_add($clips, 'token', $vote->token);

        return view('home', compact('ticket'));
    }

    public function store(Request $request, $id)
    {
        // Find a Voting Ticket by Token
        $vote = Vote::where('token', $request->token)->first();

        // Voting validation
        if (!$this->validateVoting($vote, $id))
            return redirect()->route('vote.get')->with('status', 'Please do not try to manipluate the data.');

        // Update the Winner in Votes table
        $vote = $this->updateWinner($vote, $id);

        // Update the Rating in Clips table
        $this->updateRating($vote);

        return redirect()->back();
    }

    protected function validateVoting($vote, $winnerId)
    {
        // Check if Token is valid
        if (!$vote)
            return false;

        // Check if the vote is not a duplicated
        if ($vote->is_voted)
            return false;

        // Check if Winner data was not manipulated
        if (!in_array($winnerId, [$vote['winner_id'], $vote['oponnent_id']]))
            return false;

        // Check if Token is not expired and it is not too early for voting
        $timeGap = Carbon::now()->diffInSeconds($vote->created_at);
        if ($timeGap < 1 || $timeGap > 300)
            return false;

        return true;
    }

    protected function updateWinner($vote, $winnerId)
    {
        if ($vote['winner_id'] != $winnerId) {
            $vote['oponnent_id'] = $vote['winner_id'];
            $vote['winner_id'] = $winnerId;
        }

        $vote['is_voted'] = true;
        $vote->save();

        return $vote;
    }

    protected function updateRating($vote)
    {
        $rating = new Rating($vote->winner->rating, $vote->oponnent->rating, Rating::WIN, Rating::LOST);
        $result = $rating->getNewRatings();

        $vote->winner->update(['rating' => floor($result['a'])]);
        $vote->oponnent->update(['rating' => floor($result['b'])]);
    }

}
