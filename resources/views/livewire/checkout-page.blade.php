<div>
    <h1 class="text-3xl text-secundary-700 uppercase font-bold mb-10 my-8">Checkout</h1>

    <div class="flex flex-col-reverse lg:flex-row lg:space-x-14 lg:gap-0 gap-4">

        <div class="lg:w-2/3 space-y-8">

            <x-card title="Contact" icon="user-circle">
                <x-jet-label for="name" value="Nome" />
                <x-jet-input type="text" name="input" id="name" placeholder="Name" />
                <x-jet-label for="email" value="Email" />
                <x-jet-input type="email" name="email" id="email" placeholder="Email" />

                <div class="flex justify-between">
                    <div class="space-y-2 ">
                        <x-jet-dropdown align="left" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secundary-300 bg-white hover:bg-secundary-50 hover:text-secundary-700 focus:outline-none focus:bg-secundary-50 active:bg-secundary-50 transition">
                                        {{ __('City') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- City -->
                                    <div class="block px-4 py-2 text-xs text-secundary-300">
                                        {{ __('City') }}
                                    </div>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('São Paulo') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Rio de Janeiro') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Campo Grande') }}
                                    </x-jet-dropdown-link>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    <div class="space-y-2 ">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secundary-300 bg-white hover:bg-secundary-50 hover:text-secundary-700 focus:outline-none focus:bg-secundary-50 active:bg-secundary-50 transition">
                                        {{ __('State') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- State -->
                                    <div class="block px-4 py-2 text-xs text-secundary-300">
                                        {{ __('State') }}
                                    </div>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('São Paulo') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Rio de Janeiro') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Mato Grosso do Sul') }}
                                    </x-jet-dropdown-link>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    <div class="space-y-2 ">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secundary-300 bg-white hover:bg-secundary-50 hover:text-secundary-700 focus:outline-none focus:bg-secundary-50 active:bg-secundary-50 transition">
                                        {{ __('Country') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Country -->
                                    <div class="block px-4 py-2 text-xs text-secundary-300">
                                        {{ __('Country') }}
                                    </div>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Brazil') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('United States') }}
                                    </x-jet-dropdown-link>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>

                <x-jet-label for="zipcode" value="Zipcode" />
                <x-jet-input type="text" name="zipcode" id="zipcode" placeholder="Zip Code" />

                <x-jet-label for="address1" value="Address Line 1" />
                <x-jet-input type="text" name="input" id="address1" placeholder="Address Line 1" />
                <x-jet-label for="address2" value="Address Line 2" />
                <x-jet-input type="text" name="input" id="address2" placeholder="Address Line 2" />

                <div class="flex items-center justify-between text-secundary-300">
                    <x-input.switch>
                        Save thiss contact as default?
                    </x-input.switch>
                </div>

            </x-card>

            <x-card title="Delivery" icon="truck">
                <x-jet-label for="name" value="Nome" />
                <x-jet-input type="text" name="input" id="name" placeholder="Name" />
                <x-jet-label for="email" value="Email" />
                <x-jet-input type="email" name="email" id="email" placeholder="Email" />

                <div class="flex gap-4">

                    <div class="flex-1 space-y-2">
                        <x-jet-label for="address1" value="Address Line 1" />
                        <x-jet-input type="text" name="input" id="address1" placeholder="Address Line 1" />
                    </div>

                    <div class="flex-1 space-y-2">
                        <x-jet-label for="address2" value="Address Line 2" />
                        <x-jet-input type="text" name="input" id="address2" placeholder="Address Line 2" />
                    </div>

                </div>

                <div class="flex justify-between">
                    <div class="space-y-2 ">
                        <x-jet-dropdown align="left" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secundary-300 bg-white hover:bg-secundary-50 hover:text-secundary-700 focus:outline-none focus:bg-secundary-50 active:bg-secundary-50 transition">
                                        {{ __('City') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- City -->
                                    <div class="block px-4 py-2 text-xs text-secundary-300">
                                        {{ __('City') }}
                                    </div>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('São Paulo') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Rio de Janeiro') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Campo Grande') }}
                                    </x-jet-dropdown-link>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    <div class="space-y-2 ">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secundary-300 bg-white hover:bg-secundary-50 hover:text-secundary-700 focus:outline-none focus:bg-secundary-50 active:bg-secundary-50 transition">
                                        {{ __('State') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- State -->
                                    <div class="block px-4 py-2 text-xs text-secundary-300">
                                        {{ __('State') }}
                                    </div>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('São Paulo') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Rio de Janeiro') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Mato Grosso do Sul') }}
                                    </x-jet-dropdown-link>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                    <div class="space-y-2 ">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secundary-300 bg-white hover:bg-secundary-50 hover:text-secundary-700 focus:outline-none focus:bg-secundary-50 active:bg-secundary-50 transition">
                                        {{ __('Country') }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Country -->
                                    <div class="block px-4 py-2 text-xs text-secundary-300">
                                        {{ __('Country') }}
                                    </div>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Brazil') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link
                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('United States') }}
                                    </x-jet-dropdown-link>
                                </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>

                <div class="flex items-center justify-between text-secundary-300">
                    <x-input.switch>
                        Save thiss address as default?
                    </x-input.switch>
                </div>
            </x-card>

            <x-card title="Payment" icon="credit-card">

                <div class="space-y-2">
                    <x-jet-label for="namecard" value="Cardholder Name" />
                    <x-jet-input type="text" name="namecard" id="namecard" placeholder="Cardholder Name" />
                </div>


                <div class="flex flex-1 gap-4">
                    <div class="space-y-2 w-6/12">
                        <x-jet-label for="numbercard" value="Card Number" />
                        <x-jet-input type="numeric" name="numbercard" id="numbercard" placeholder="Card Number" />
                    </div>

                    <div class="flex-1 space-y-2 w-3/12">
                        <x-jet-label for="valid" value="Valid" />
                        <x-jet-input type="date" name="valid" id="valid" placeholder="MM/YY" />
                    </div>

                    <div class="flex-1 space-y-2 w-3/12">
                        <x-jet-label for="ccv" value="Security Code" />
                        <x-jet-input type="number" max="999" min="0" name="ccv" id="address2" placeholder="CCV" />
                    </div>
                </div>

                <div class="flex items-center justify-between text-secundary-300">
                    <x-input.switch>
                        Save thiss address as default?
                    </x-input.switch>
                </div>
            </x-card>

        </div>

        <div class="w-full lg:w-1/3">
            <div class="bg-white rounded-lg overflow-hidden sticky top-4">
                <div class="px-8 pt-8 pb-4 space-y-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-secundary-600">
                            Resume checkout
                        </h3>
                        <x-icon.shopping-bag class="w-8 h-8" />
                    </div>
                    <div class="space-y-4 text-sm font-normal text-secundary-400">
                        <div class="flex justify-between">
                            <span>2 products</span>
                            <span>$ 1,280.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>2 products</span>
                            <span>$ 1,280.00</span>
                        </div>
                        <div class="flex justify-between text-secundary-200">
                            <span>Discount</span>
                            <span>$ 1,280.00</span>
                        </div>

                        <div class="flex w-10/12 gap-2 items-center">
                            <x-jet-input type="text" class="p-2" placeholder="Cupom" />
                            <x-icon.plus class="h-8 w-10 hover:bg-primary-600 hover:cursor-pointer rounded-md bg-black text-white" />
                        </div>

                        <div class="flex justify-between font-bold">
                            <span>Total</span>
                            <span class="text-xl">$ 1,280.00</span>
                        </div>
                    </div>
                </div>
                <x-jet-button 
                    class="gap-2 font-bold"
                    x-data="{
                        async confirmPayment($wire){
                            try{
                                var stripeSession = await $wire.confirmPayment()
                                await window.location.replace(stripeSession.url)
                            }
                            catch(error){
                                console.error(error);
                            }
                        }
                    }"
                    x-on:click="confirmPayment($wire)"
                >
                    <x-icon.lock-closed class="w-6 h-6 text-green-300" />
                    <span>Confirm payment</span>
                </x-jet-button>
            </div>
        </div>
    </div>

</div>