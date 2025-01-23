<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingPageResource\Pages;
use App\Filament\Resources\LandingPageResource\RelationManagers;
use App\Models\LandingPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class LandingPageResource extends Resource
{
    protected static ?string $model = LandingPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Header Section
                TextInput::make('header.logo')->label('Logo'),
                Repeater::make('header.navigation')
                    ->schema([
                        TextInput::make('label')->required(),
                        TextInput::make('link')->required(),
                    ])->label('Navigation Links'),

                // Hero Section
                TextInput::make('hero.heading')->required(),
                Textarea::make('hero.subheading'),
                FileUpload::make('hero.image')->image(),
                Repeater::make('hero.highlights')
                    ->schema([
                        TextInput::make('highlight'),
                    ]),

                // About Section
                TextInput::make('about.heading')->required(),
                Textarea::make('about.description'),
                FileUpload::make('about.image')->image(),

                // Features Section
                Repeater::make('features')
                    ->schema([
                        FileUpload::make('icon')->image(),
                        TextInput::make('title')->required(),
                        Textarea::make('description'),
                    ]),

                // Testimonials Section
                Repeater::make('testimonials')
                    ->schema([
                        FileUpload::make('client_image')->image(),
                        TextInput::make('client_name')->required(),
                        Textarea::make('review')->required(),
                    ]),

                // Services Section
                Repeater::make('services')
                    ->schema([
                        TextInput::make('service_title')->required(),
                        Textarea::make('service_description'),
                        FileUpload::make('icon')->image(),
                    ]),

                // Pricing Section
                Repeater::make('pricing_plans')
                    ->schema([
                        TextInput::make('plan_name')->required(),
                        TextInput::make('price')->required(),
                        Textarea::make('features_list')->required(),
                    ]),

                // FAQ Section
                Repeater::make('faq')
                    ->schema([
                        TextInput::make('question')->required(),
                        Textarea::make('answer')->required(),
                    ]),

                // Contact Section
                TextInput::make('contact.address')->required(),
                TextInput::make('contact.phone')->required(),
                TextInput::make('contact.email')->required(),

                // Footer Section
                Textarea::make('footer.text'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hero.heading')->sortable()->searchable(),
                TextColumn::make('about.heading')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLandingPages::route('/'),
            'create' => Pages\CreateLandingPage::route('/create'),
            'edit' => Pages\EditLandingPage::route('/{record}/edit'),
        ];
    }
}
