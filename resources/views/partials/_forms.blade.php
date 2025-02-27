@antlers

<head>
    {{ captcha:head }}
</head>

{{ form:contact }}

<body>
    <div class="flex flex-col gap-4 text-gray-900">

        {{ if success }}
        <div class="bg-green-300 text-white p-2">
            {{ success }}
        </div>

        {{ /if }}

        <div class="flex flex-col md:flex-row gap-4 w-full">
            <div class="md:w-1/2 flex flex-col">
                <input type="text" name="first_name" id="first_name" minlength="2" maxlength="32" pattern="[A-Za-z\s]{1,32}" title="Nombres" class="w-full h-12 p-4 text-gray-900 focus:outline-hidden border-none focus:ring-1 focus:ring-gray-300 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 rounded-xl bg-slate-100" placeholder="Name(s)" />

                {{ if error:first_name }}
                <span class="inline-block text-red-500">
                    This field can't be empty, e.g. John
                </span>
                {{ /if }}

            </div>
            <div class="md:w-1/2 flex flex-col">
                <input type="text" name="last_name" id="last_name" minlength="2" maxlength="32" pattern="[A-Za-z]{1,32}" class="w-full h-12 p-4 text-gray-900 focus:outline-hidden border-none focus:ring-1 focus:ring-gray-300 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 rounded-xl bg-slate-100" placeholder="Last Name" />


                {{ if errors }}
                <span class="inline-block text-red-500">
                    This field can't be empty, e.g. Doe
                </span>
                {{ /if }}

            </div>
        </div>

        <div class="w-full flex flex-col">
            <input type="email" name="email" id="email" minlength="4" class="w-full h-12 p-4 text-gray-900 focus:outline-hidden border-none focus:ring-1 focus:ring-gray-300 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 rounded-xl bg-slate-100" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Email" />


            {{ if errors }}
            <span class="inline-block text-red-500">
                This field can't be empty, e.g. correo@ejemplo.com
            </span>
            {{ /if }}

        </div>

        <div class="w-full flex flex-col">
            <input type="tel" name="phone" id="phone" inputmode="numeric" minlength="9" maxlength="12" class="w-full h-12 p-4 text-gray-900 focus:outline-hidden border-none focus:ring-1 focus:ring-gray-300 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 rounded-xl bg-slate-100" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="Phone number" />


            {{ if errors }}
            <span class="inline-block text-red-500">
                This field can't be empty, e.g. 1234567890
            </span>
            {{ /if }}

        </div>
        <div class="w-full flex flex-col">
            <textarea name="note" id="note" minlength="10" class="bg-[F5F5F5] w-full min-h-40 p-4 resize-none text-gray-900 focus:outline-hidden border-none focus:ring-1 focus:ring-gray-300 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 rounded-xl bg-slate-100" placeholder="Write a message"></textarea>

            {{ if errors }}
            <span class="inline-block text-red-500">
                This field can't be empty.
            </span>
            {{ /if }}

        </div>
        <div class="py-1">
            {{ captcha }}

            {{ if error:captcha }}
                <p>{{ error:captcha }}</p>
            {{ /if }}
        </div>

        <input type="text" class="hidden" name="{{ honeypot ?? 'honeypot' }}" />

        <div class="transition-opacity hover:opacity-100 hover:ease-in">
            <button type="submit" class="bg-primary hover:scale-105 shadow-sm hover:shadow-2xl transition text-white py-2 lg:py-3 px-4 lg:px-5 lg:text-base text-sm font-bold rounded-full text-center inline-flex cursor-pointer disabled:opacity-50">
                Send message
            </button>
        </div>
    </div>
</body>


{{ /form:contact }}
@endantlers