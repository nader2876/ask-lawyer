@extends('layouts.lawyer')

@section('title', 'Edit Answer')
@section('page-title', 'Edit Answer')

@section('content')
    <div class="card mb-4 shadow-sm">
        <div class="card-header py-3">
            <h5 class="mb-0">Question: <span class="text-primary">What are the penalties for cybercrime defamation?</span></h5>
        </div>
        <div class="card-body">
            <p class="text-secondary lead fs-6">I was defamed online through social media by a former colleague. What legal actions can I take under UAE law? Can I claim damages?</p>
            <div class="text-muted small border-top pt-3 mt-3">
                <span class="badge bg-info me-2">Criminal Law</span>
                <i class="fas fa-user me-1"></i> Asked by Ahmed Hassan • <i class="fas fa-clock me-1 ms-2"></i> 3 days ago
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header py-3">
            <h5 class="mb-0"><i class="fas fa-edit me-2 text-success"></i>Edit Your Answer</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-4">
                    <label class="form-label fw-bold">Your Professional Advice</label>
                    <textarea class="form-control" rows="10">Under the Anti-Cyber Crime Law, defamation via electronic means involves penalties including imprisonment for up to one year and/or a fine ranging from AED 250,000 to AED 500,000. 

You should document all evidence (screenshots, URLs) and file a complaint with the eCrime service of Dubai Police or your local police station. 

Regarding damages, you can file a civil lawsuit for compensation after the criminal court issues a final verdict.</textarea>
                    <small class="text-muted">Provide detailed, professional legal advice citing relevant laws where possible.</small>
                </div>
                
                <div class="alert bg-transparent text-info border border-info border-start-4">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Professional Tip:</strong> Start with a direct answer, then elaborate on the procedure and potential outcomes.
                </div>
                
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('lawyer.answers.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-primary px-4 fw-bold">
                        <i class="fas fa-save me-2"></i>Update Answer
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
